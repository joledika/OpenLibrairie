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
}
