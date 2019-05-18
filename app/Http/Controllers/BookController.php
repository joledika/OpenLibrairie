<?php

namespace App\Http\Controllers;

use App\Book;
use App\Commentary;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaryRequest;
use MercurySeries\Flashy\Flashy as flashy;

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

    public function store(CommentaryRequest $request,$category,$id)
    {
        /******************************************************
         *
         ***********ajout du commentaire dans la base***********
         *
         ******************************************************/
        Commentary::create(
            [
                'user_id' => 1, //test seulement
                'book_id' => $id, //a remplacer par le slug dans le future
                'commentary' => $request->commentary
            ]
        );
        /**********************************************************
         * ***********petite message de notification****************
         **********************************************************/
        flashy()->success('Votre commentaire est belle et bien ajouté');

         /**********************************************************
         ***********redirection vers la page du livres*************
         **********************************************************/
        return redirect()->back();
    }
}
