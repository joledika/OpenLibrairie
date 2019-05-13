@extends('templates.default')


@section('title',"Articles")
@section('description',"liste des articless")

@section('heading',"liste des articles")


@section('content')
<div class="ui two column grid mt-3">
        @forelse ($posts as $post)
        <div class="column">
            <div class="ui raised segment">
                <a class="ui red ribbon label">Overview</a>
                <span>{{$post->name}}</span>
                <p>{{str_limit($post->body,100)}}</p>
                <a class="ui teal right ribbon label">Afficher plus</a>

            </div>
        </div>
        @empty
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
    @endforelse




@endsection
