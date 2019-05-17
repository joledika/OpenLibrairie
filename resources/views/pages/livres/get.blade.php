@extends('templates.default')


@section('title',"Page de téléchargement de livres")
{{--  @section('description',"liste des livres")  --}}

@section('heading',$livre->title)


@section('content')


    <div style="margin-top:10px">
        <img class="ui medium centered circular image" src="{{asset('home_page/img/intro/1.jpg')}}">
    </div>


    <div class="ui placeholder segment">
        <div class="ui icon header">
            <i class="pdf file outline icon"></i>
            Cet livre est pret à télécharger.
        </div>

        <a href="#" class="ui orange button"><i class="download icon"></i>Télécharger</a>
    </div>




@stop
