<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   protected $users;
      public function __construct(User $users)
    {
        $this->users = $users;
        
        //parent::__construct();
    }
    public function index()
    {
        $users = $this->users->get();

        return view('admin.user.index', compact('users'));

    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
       return view('admin.User.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $User = new User();
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'
        ]);

        $User->name = $request->name;
        $User->username= $request->username;
        $User->email = $request->email;
        $User->password= $request->password;
        $User->save();

        $data = array(
        'email'=>$request->email,
        'name' => $request->name,
        'username' => $request->username,
        'password' =>$request->password,
        );
	    Mail::send('emailWelcome', $data,function($message) use ($data){
		$message->from('rabeb.frigui95@gmail.com');
		$message->to($data['email']);
		$message->subject('Activation compte');
    });
        return redirect(route('admin.user.index'))->with('message','Utilisateur a été ajouté avec succès!');


    }
    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('admin.user.edit', compact('User'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $User = User::findOrFail($id);
        $User->fill($request->only('name','username','email','password'))->save();


        return redirect(route('admin.user.index'))->with('message','Utilisateur' .$User->name . ' a été modifié avec succès');
    }
 public function destroy($id)
    {
        User::where('id','=', $id)->delete();
        return redirect(route('admin.user.index'))->with('message','Utilisateur a été suppimé avec succès!');
    }

}