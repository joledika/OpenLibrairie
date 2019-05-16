@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')

<div class="mt-3">


<div class="ui link cards">
        @for ($i = 0; $i < 5; $i++)

        <div class="card">

        <div class="image">

        <img src="{{asset('img/helen.jpg')}}">

        </div>
        <div class="content">
        <div class="header"><a href="#">Titre du livre</a></div>
        <div class="meta">
            <a class="ui teal right ribbon label">Categorie</a>


        </div>
        <div class="description">
            description du livres
        </div>
        </div>
        <div class="extra content">
        <span class="right floated">
            date de publication
        </span>
        <span>
            <i class="user icon"></i>
            nb commentaires
        </span>
        </div>

    </div>

    @endfor
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

@endsection

@section('script')

        $('.special.cards .image').dimmer({
            on: 'hover'
          });

@endsection



