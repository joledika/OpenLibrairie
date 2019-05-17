<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        /******************************************************
         *
         *Récuperation des livres et renvoyer vers la vue
         *
         ******************************************************/
        $livres = Book::with(['category','user'])->get();
        return view('pages/livres/books',compact('livres'));
    }

    public function show($categorie, $id)
    {
        /******************************************************
         *
         *Récuperation de livre et renvoyer vers la vue
         *
         ******************************************************/
        $livre = Book::where('id',$id)->first();

        return view('pages/livres/show',compact('livre'));
    }

    public function get($categorie, $id)
    {
       /******************************************************
         *
         *Récuperation de livre et renvoyer vers la vue
         *
         ******************************************************/
        $livre = Book::where('id',$id)->first();

        return view('pages/livres/get',compact('livre'));
    }
}
