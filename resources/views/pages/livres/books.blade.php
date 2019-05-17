@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')

<div class="mt-3">


    <div class="ui link cards">
            @forelse ($livres as $livre)



            <div class="card">

            <div class="image">

            <img src="{{asset('img/helen.jpg')}}">

            </div>
            <div class="content">
            <div class="header"><a href="{{route('book_path',[$livre->category->name,$livre])}}">Titre du livre</a></div>
            <div class="meta">
                <a class="ui teal right ribbon label">{{$livre->category->name}}</a>


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

        @empty
        <div class="ui icon message mt-5" >
            <i class="info icon"></i>
            <div class="content">
                <div class="header">
                    Auncun enregistrement
                <p>Désolé, il n'y pas d'enregistrement en ce moment.</p>
                </div>
            </div>
        </div>
        @endforelse
    </div>







</div>

@endsection





