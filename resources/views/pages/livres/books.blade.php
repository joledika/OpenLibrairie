@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')
<div class="mt-3">
    <div class="ui link cards">

        <div class="card m-auto">
            <div class="image">
                <img src="{{asset('img/daniel.jpg')}}">
            </div>
            <div class="content">
                <div class="header">Titre du livre</div>
                <div class="meta">
                <a>Catégorie</a>
                </div>
                <div class="description">
                Description du livres.
                </div>
            </div>
            <div class="extra content">
                <span class="right floated">
                date de publication
                </span>
                <span>
                <i class="user icon"></i>
                75 Commentaires
                </span>
            </div>
        </div>



        <div class="ui icon message mt-5" >
            <i class="info icon"></i>
            <div class="content">
                <div class="header">
                    Auncun enregistrement
                <p>Désolé, il n'y pas d'enregistrement en ce moment.</p>
                </div>
            </div>
        </div>



  </div>

</div>

@endsection





