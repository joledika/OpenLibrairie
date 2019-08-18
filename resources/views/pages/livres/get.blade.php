@extends('templates.default')


@section('title',"Page de téléchargement de livres")
{{--  @section('description',"liste des livres")  --}}

@section('heading',$livre->title)


@section('content')


    <div style="margin-top:10px">
        <img class="ui medium centered image" src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}">
    </div>


    <div class="ui placeholder segment">
        <div class="ui icon header">
            <i class="pdf file outline icon"></i>
            Cet livre est pret à télécharger.
        </div>

        <a href="/storage/{{$livre->book}}" target="_blank" class="ui orange button"><i class="download icon"></i>Télécharger</a>
    </div>




@stop
