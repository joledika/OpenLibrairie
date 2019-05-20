<?php

namespace App\Http\Controllers;

use App\Book;
use App\Commentary;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaryRequest;
use MercurySeries\Flashy\Flashy as flashy;

class CommentaryController extends Controller
{


    public function store(CommentaryRequest $request,$category,$slug)
    {

         /***********recherche du livre a modifier************* */
        $livre = Book::where('slug',$slug)->firstOrFail();

        /******************************************************
         *
         ***********ajout du commentaire dans la base***********
         *
         ******************************************************/
        Commentary::create(
            [
                'user_id' => auth()->user()->id,
                'book_id' => $livre->id,
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
