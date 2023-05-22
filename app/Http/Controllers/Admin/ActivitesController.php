<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Activite;

class ActivitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   protected $activites;
      public function __construct(Activite $activites)
    {
        $this->activites = $activites;
        
        //parent::__construct();
    }
    public function index()
    {
        $activites = $this->activites->get();
    
        return view('admin.activites.index', compact('activites'));
    
    }
    
     public function indexadmin()
    {
        $activites = $this->activites->get();
    
        return view('admin.indexAdmin', compact('activites'));
    
    }
  
    public function getActivite()
    {

        return view('admin.activites.add');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Activite $activite)
    {
       return view('admin.activites.add', compact('activite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Activite = new Activite();
        $this->validate($request, [
            'titre' => 'required',
            'category' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'imgUrl' => 'required|image',
        ]);
        if ($request->hasFile('imgUrl')) {
            $image = $request->file('imgUrl');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $Activite->imgUrl  = $name;
        }
        $Activite->titre = $request->titre;
        $Activite->category= $request->category;
        $Activite->description = $request->description;
        $Activite->prix = $request->prix;
         $Activite->save();
        return redirect(route('admin.activites.index'))->with('message','Produit  ' .$Activite->titre . ' a été ajouté avec succès');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_activite)
    {
         $Activite = Activite::findOrFail($id_activite);
          return view('admin.activites.edit', compact('Activite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_activite)
   {
    $this->validate($request, [
        'titre' => 'required',
        'category' => 'required',
        'description' => 'required',
        'prix' => 'required',
    ]);
    if ($request->hasFile('imgUrl')) {
        $image = $request->file('imgUrl');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $Activite = Activite::findOrFail($id_activite);
        $Activite->imgUrl  = $name;
    }
    else
       { $Activite = Activite::findOrFail($id_activite);}

        $Activite->fill($request->only('titre','category','description','prix'))->save();
      

        return redirect(route('admin.activites.index'))->with('message','Produit ' .$Activite->titre . ' a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_activite)
    {
         Activite::where('id_activite','=', $id_activite)->delete();
         return redirect(route('admin.activites.index'))->with('message','Produit a été suppimé avec succès!');
    }

  
}
