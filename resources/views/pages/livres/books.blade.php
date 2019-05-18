@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')

<div class="mt-3">
    {{--  DROPDOWN FILTER  --}}
    <div class="d-flex justify-content-end mb-3">

            <div class="ui compact menu">
                <div class="ui simple dropdown item">
                    <i class="filter icon"></i>
                    Filtrer
                    <i class="dropdown icon"></i>
                    <div class="menu">

                    <a hreff="#" class="item">Choice 1</a>
                    <a hreff="#" class="item">Choice 2</a>
                    <a hreff="#" class="item">Choice 3</a>
                    </div>
                </div>
            </div>





    {{--  END DROPDOWN FILTER  --}}
    </div>

    <div class="ui link cards">
        @for ($i = 0; $i < 10; $i++)


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
                <i class="heart like icon"></i>
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
        @endfor
    </div>

</div>

@endsection





