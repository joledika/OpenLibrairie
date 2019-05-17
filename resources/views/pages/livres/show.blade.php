@extends('templates.default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')




    <div class="d-flex justify-content-end mt-2">

        <a href="" class="ui tiny teal button" type="submit"><i class="edit icon"></i>Modifier</a>
        <a href="" class="ui tiny orange button" type="submit"><i class="trash icon"></i>supprimer</a>
        <a href="{{route('get_book_path',[$livre->category->name,$livre])}}" class="ui tiny green button" type="submit"><i class="download icon"></i>télécharger</a>

    </div>


    <div style="margin-top:10px">
        <img class="ui small centered circular image" src="{{asset('img/elliot.jpg')}}">
    </div>
    <div class="ui one column grid mt-2">

        <div class="column">

            <div class="ui raised segment">

                <span class="ui header">{{$livre->title}}</span>
                <p>description</p>
                <p class="text-justify">{!!$livre->body!!}</p>

            </div>
        </div>

    </div>

    <div class="ui comments">
        @forelse($commentaires as $commentaire)


        <div class="comment">
            <a class="avatar">
            <img src="{{asset('img/elliot.jpg')}}">
            </a>
            <div class="content">
            <a class="author">{{$commentaire->user->name}}</a>
            <div class="metadata">
                <div class="date">{{$commentaire->created_at->diffForHumans()}}</div>
            </div>
            <div class="text">
                <p>
                    {!! $commentaire->commentary !!}
                </p>

            </div>

        </div>
        @empty
        @endforelse
    </div>


        <form action="" method="POST" class="ui reply form">
            @csrf
            <div class="field">
            <textarea name="commentary" placeholder="votre commentaire....."></textarea>
            </div>
            <div class="ui primary submit labeled icon button">
            <i class="icon edit"></i>
            Ajouter commentaire
            </div>
        </form>
    </div>



@stop
