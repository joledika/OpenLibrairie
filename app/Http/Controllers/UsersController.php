<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        /******************************************************
         *
         *Récuperation des utilisateur et renvoyer vers la vue
         *
         ******************************************************/
        $users = User::get();
        return view('pages/membres/membres',compact('users'));
    }
}
