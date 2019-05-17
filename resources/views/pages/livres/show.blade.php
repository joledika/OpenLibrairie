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

        <div class="comment">
            <a class="avatar">
            <img src="{{asset('img/elliot.jpg')}}">
            </a>
            <div class="content">
            <a class="author">Joe Henderson</a>
            <div class="metadata">
                <div class="date">1 day ago</div>
            </div>
            <div class="text">
                <p>The hours, minutes and seconds stand as visible reminders that your effort put them all there. </p>
                <p>Preserve until your next run, when the watch lets you see how Impermanent your efforts are.</p>
            </div>
            <div class="actions">
                <a class="reply">Reply</a>
            </div>
            </div>
        </div>
        <div class="comment">
            <a class="avatar">
            <img src="{{asset('img/elliot.jpg')}}">
            </a>
            <div class="content">
            <a class="author">Christian Rocha</a>
            <div class="metadata">
                <div class="date">2 days ago</div>
            </div>
            <div class="text">
                I re-tweeted this.
            </div>
            <div class="actions">
                <a class="reply">Reply</a>
            </div>
            </div>
        </div>
        <form class="ui reply form">
            <div class="field">
            <textarea></textarea>
            </div>
            <div class="ui primary submit labeled icon button">
            <i class="icon edit"></i> Add Comment
            </div>
        </form>
    </div>



@stop
