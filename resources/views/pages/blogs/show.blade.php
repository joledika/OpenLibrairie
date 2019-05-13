@extends('templates.default')


@section('title',"Articles")
{{-- @section('description',{{$post->body}}) --}}

{{-- @section('heading',{{$post->tile}}) --}}


@section('content')
    <div class="d-flex justify-content-end mt-2">

        <button class="ui tiny teal button" type="submit"><i class="edit icon"></i>Modifier</button>
        <button class="ui tiny orange button" type="submit"><i class="trash icon"></i>supprimer</button>

    </div>




    <div class="ui one column grid mt-2">

        <div class="column">

            <div class="ui raised segment">

                <span class="ui header">{{$post->name}}</span>
                <p>{!!$post->body!!}</p>


            </div>
        </div>

    </div>






@endsection
