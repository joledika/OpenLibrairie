<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class DashboardController extends Controller
{
    public function index()
    {

      //recuperation des livres
      $livresRec = Book::latest()->paginate(8);
      $livresTop = Book::paginate(8);
      return view('pages/dashboard',compact('livresRec','livresTop'));
    }
}
