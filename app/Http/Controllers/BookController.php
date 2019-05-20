<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Category;
use App\Commentary;
use Illuminate\Http\Request;
use App\Http\Requests\AddBookRequest;
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
        $livres = Book::with(['category','user'])->latest()->get();


        return view('pages/livres/books',compact('livres'));
    }

    public function add()
    {
        $categories = Category::get();
        $users = User::all();
        return view('pages/livres/add',compact('categories','users'));
    }



    public function show($categorie, $slug)
    {
        /******************************************************
         *
         *Récuperation de livre et renvoyer vers la vue
         *
         ******************************************************/
        $livre = Book::where('slug',$slug)->firstOrFail();
        $commentaires = Commentary::where('book_id',$livre->id)->get();

        return view('pages/livres/show',compact('livre','commentaires'));
    }

    public function get($categorie, $slug)
    {
       /******************************************************
         *
         *Récuperation de livre et renvoyer vers la vue
         *
         ******************************************************/
        $livre = Book::where('slug',$slug)->first();

        return view('pages/livres/get',compact('livre'));
    }

    public function store(AddBookRequest $request)
    {

        Book::create(
            [
                'title'=>$request->title,
                'category_id'=>$request->category_id,
                'user_id'=>$request->user_id,
                'description'=>$request->description,
                'book'=>$request->book, //a remplacer
                'slug'=>str_slug($request->title)

            ]
        );
        return \back();
    }

    public function update(Request $request, $categorie,$slug)
    {
        $livre = Book::where('slug',$slug)->firstOrFail();

        $livre->update(
            [
                'title' => $request->title,
                'category_id' => $request->category_id,
                'user_id' => auth()->user()->id,
                'description' => $request->description,

            ]
        );

        /**********************************************************
         * ***********petite message de notification****************
         **********************************************************/
        flashy()->success('Modification éffectué');

        /**********************************************************
         ***redirection vers la page du livre qui a ete modifier***
         **********************************************************/
        return redirect()->route('book_path',[$categorie,$slug]);
    }

    public function create($categorie,$slug)
    {
        /********************************************************************
         *
         **Récuperation de livre et renvoyer vers la formulaire les données**
         *
         ********************************************************************/
        $livre = Book::where('slug',$slug)->firstOrFail();
        $categories = Category::get();

        return view('pages/livres/edit',compact('livre','categories'));
    }
}
