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


    public function edit($category,$slug,$id)
    {
      $commentary = Commentary::where('id',$id)->firstOrFail();
      return view('pages/livres/commentaires/edit',compact('category','slug','commentary'));
    }

    public function update(CommentaryRequest $request,$category,$slug,$id)
    {
      $commentary = Commentary::where('id',$id)->firstOrFail();
      $commentary->update([
        'commentary'=>$request->commentary,
      ]);


      Flashy::message('modification éffectué');
      return redirect()->route('book_path',[$category,$slug]);
    }

    public function destroy($category,$slug,$id)
    {
      $commentaire = Commentary::where('id',$id)->firstOrFail();
      $commentaire->delete();

      Flashy::message('Commentaire effacé avec succés');
      return redirect()->route('book_path',[$category,$slug]);
    }
}
