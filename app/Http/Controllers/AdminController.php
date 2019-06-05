<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Downloaded;
use App\Category;
use App\Commentary;
use App\GuardContact;

class AdminController extends Controller
{
    public function index()
    {
      $livres = Book::all()->count();

      $membres = User::all()->count();

      $commentaires = Commentary::all()->count();

      $messages = GuardContact::all()->count();

      return view('administration/welcome',compact('livres','membres','commentaires','messages'));
    }

    public function members()
    {
      $users = User::latest()->paginate(15);
      return view('administration/membres/index',compact('users'));
    }

    public function books($category = null,Request $request)
    {
      if ($request->category && $request->category !="null") {


        $cat = Category::where('slug', $request->category)->first();
        $livres = Book::where('category_id',$cat->id)->with(['category','user'])->latest()->paginate(20);

      }else{
        $livres = Book::with(['category','user'])->latest()->paginate(20);

      }

      //s'il y a un recherche a faire
      if($request->recherche)
      {
        $recherche = $request->recherche;

         $livres = Book::where('title','like',"%$recherche%")
                       ->latest()
                       ->get();




      }else {
        $recherche = null;

      }


      if (isset($cat)) {

            return view('administration/livres/index',[
              'livres' => $livres,
              'categories'=> Category::get(),
              'cat'=>$cat,
              'recherche'=>$recherche,
            ]);

            }





         return view('administration/livres/index',[
           'livres' => $livres,
           'categories'=> Category::get(),
           'recherche'=>$recherche,
         ]);




    }

    public function profile($id)
    {
        $user = User::where('id' , $id)->with(['profile','contact'])->first();


        return view('pages/admin/membres/profile',compact('user'));


    }
}
