@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')

<div class="mt-3">


    <div class="ui link cards">
            @forelse ($livres as $livre)



            <div class="card">
                <div class="ui small content">
                    <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                    <img class="ui avatar image" src="{{asset('img/helen.jpg')}}">{{$livre->user->name}}
                  </div>

            <div class="image">

            <img src="{{asset('img/helen.jpg')}}">

            </div>
            <div class="content">
            <div class="header"><a href="{{route('book_path',[$livre->category->name,$livre])}}">Titre du livre</a></div>
            <div class="meta">
                <a class="ui orange small left ribbon label">{{$livre->category->name}}</a>

            </div>

            <div class="content">
            <span class="right floated">
                <i class="heart outline like icon"></i>
                17 likes
            </span>
            <i class="comment icon"></i>
            {{$livre->commentaries()->count()}} commentaires
            </div>
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





