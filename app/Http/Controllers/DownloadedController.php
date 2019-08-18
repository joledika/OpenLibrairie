<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class DownloadedController extends Controller
{
  public function update($categorie, $slug)
  {
     /******************************************************
       *
       *Récuperation de livre et renvoyer vers la vue
       *
       ******************************************************/
      $livre = Book::where('slug',$slug)->first();
      $downs = $livre->downloaded->downloads;

      $livre->downloaded->update([
          'downloads' => $downs + 1
      ]);

      return view('pages/livres/get',compact('livre'));
  }
}
