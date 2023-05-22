<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Activite;
class UserController extends Controller
{
    public function index()
    {
        return view('users.indexUser');
    }
}
