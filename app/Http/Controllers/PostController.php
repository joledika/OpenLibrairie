<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        /******************************************************
         *
         ****Récuperation des posts et renvoyer vers la vue****
         *
         ******************************************************/

        return view('pages/blogs/posts',[
            'posts'=> Post::latest()->get()
        ]);
    }


    public function show($id)
    {
        /********************************************************
         *
         ***recherche  de post cliqué et renvoyer vers la vue***
         *
         ********************************************************/

        $post = Post::findOrFail($id);

        return view('pages/blogs/show',compact('post'));
    }
}
