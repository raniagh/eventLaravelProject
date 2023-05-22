<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Requests;
use App\Activite;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $activites;
    public function __construct(Activite $activites)
    {
        $this->activites = $activites;
    }
    public function showIndex(){
        $womans = $this->activites
        ->where('category', 'like', 'Woman') 
        ->get();
        $mans = $this->activites
        ->where('category', 'like', 'Man') 
        ->get();
        $kids = $this->activites
        ->where('category', 'like', 'Kids') 
        ->get();
        $activites = $this->activites->get();
        return view('index', compact('activites','mans','womans','kids'));
    }

    public function showIndexfr(){
        $womans = $this->activites
                      ->where('category', 'like', 'Woman') 
                      ->get();
                      $mans = $this->activites
                      ->where('category', 'like', 'Man') 
                      ->get();
                      $kids = $this->activites
                      ->where('category', 'like', 'Kids') 
                      ->get();
$activites = $this->activites->get();
return view('index', compact('activites','mans','womans','kids'));
    }
    public function addToCart(Request $request,$id)
    {
        $product = Activite::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = $request->session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->titre,
                        "quantity" => 1,
                        "price" => $product->prix,
                        "photo" => $product->imgUrl
                    ]
            ];
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->titre,
            "quantity" => 1,
            "price" => $product->prix,
            "photo" => $product->imgUrl
        ];
        $request->session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function remove(Request $request,$id)
    {
        if($request->id) {
            $cart = $request->session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                $request->session()->put('cart', $cart);
            }
            $request->session()->flash('success', 'Product removed successfully');
        }
        $womans = $this->activites
                      ->where('category', 'like', 'Woman') 
                      ->get();
                      $mans = $this->activites
                      ->where('category', 'like', 'Man') 
                      ->get();
                      $kids = $this->activites
                      ->where('category', 'like', 'Kids') 
                      ->get();
        $activites = $this->activites->get();
        return view('index', compact('activites','mans','womans','kids'));
   
    }
   
}
