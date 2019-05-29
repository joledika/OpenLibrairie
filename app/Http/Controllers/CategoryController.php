<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Book;
use MercurySeries\Flashy\Flashy;

class CategoryController extends Controller
{
    public function index()
    {
      /************************************************

      retourner tous les catégories vers la page index

      *************************************************/

      if (auth()->user()->name == 'Mamisoa') {

        return view('pages/admin/livres/categorie/index',['categories'=> Category::latest()->paginate(10)]);

      }

      return view('pages/livres/categorie/index',['categories'=> Category::latest()->paginate(10)]);
    }

    public function create()
    {
      /************************************************

      retourner la vue formulaire d'ajout de categorie

      *************************************************/
      if (auth()->user()->name == 'Mamisoa') {
        return view('pages/admin/livres/categorie/add');
      }
      return view('pages/livres/categorie/add');
    }

    public function store(CategoryRequest $request)
    {
      /************************************************

      enregistrement des données dans la table de la base

      *************************************************/

      Category::create(
        [
          'name' => $request->name,
          'color'=>$request->color,
          'description'=>$request->description,

        ]
      );

      Flashy::message('Categorie ajouté avec success');

      return redirect()->route('category');
    }

    public function edit($slug)
    {

      /************************************************

      retourner la vue formulaire d'edition de categorie

      *************************************************/

      $categorie = Category::where('slug',$slug)->firstOrFail();
      if (auth()->user()->name == 'Mamisoa') {
        return view('pages/admin/livres/categorie/edit',compact('categorie'));
      }
      return view('pages/livres/categorie/edit',compact('categorie'));
    }

    public function update(CategoryRequest $request, $slug)
    {
      /************************************************

        edition des données dans la table de la base

      *************************************************/

      $categorie = Category::where('slug', $slug)->firstOrFail();

      $categorie->update($request->all());


      Flashy::message('Categorie modifié avec success');

      return redirect()->route('category');
    }

    public function destroy($slug)
    {
      /************************************************

        suppression de l'enregistrement dans la table

      *************************************************/

      $categorie = Category::where('slug', $slug)->firstOrFail();
      $categorie->delete();

      $livres = $categorie->books();

      $livres->delete();


      Flashy::message('Categorie supprimé avec success');

      return redirect()->route('category');
    }

}
