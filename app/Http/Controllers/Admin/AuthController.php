<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\AuthController as Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Mail;

class AuthController extends Controller
{
    protected $guard = 'admin';
    protected $redirectTo = 'admin';
 protected $username ='username';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator (array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|confirmed|min:6',
        ]);
        return $Validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
     protected function create(array $data)
    {
        return admin::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password'=> Hash::make(str_random(8)),
        ]);

    }

    public function sendMail(){
        $data=[];
        Mail::send('emailWelcome', $data,function($message){
        $message->from('rabeb.frigui95@gmail.com','nuit chercheurs');
        $message->to('xrabeb.xfrigui@gmail.com');
        $message->subject('welcome');
    });
}
    public function index()
    {
        return view('admin.auth.auth');
    }

    public function getRegister()
    {
        return view('admin.auth.register');
    }

    
}
