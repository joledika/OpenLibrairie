<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Downloaded;
use App\Commentary;
use App\GuardContact;

class AdminController extends Controller
{
    public function index()
    {
      $livres = Book::all()->count();

      $membres = User::all()->count();

      $commentaires = Commentary::all()->count();

      $messages = GuardContact::all()->count();

      return view('pages/admin/dashboard',compact('livres','membres','commentaires','messages'));
    }

    public function members()
    {
      $users = User::latest()->paginate(16);
      return view('pages/admin/membres/index',compact('users'));
    }

    public function profile($id)
    {
        $user = User::where('id' , $id)->with(['profile','contact'])->first();


        return view('pages/admin/membres/profile',compact('user'));


    }
}
