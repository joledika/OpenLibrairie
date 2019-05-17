<?php

namespace App\Http\Controllers;

use App\Book;
use App\Commentary;
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
        $commentaires = Commentary::where('book_id',$id)->get();

        return view('pages/livres/show',compact('livre','commentaires'));
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
