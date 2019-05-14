@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')
    <div class="ui three column grid">
        @forelse ($users as $user)
            <div class="column">
                <div class="ui fluid card">
                    <div class="image">
                        <img src="{{asset('img/daniel.jpg')}}">
                    </div>
                    <div class="content">
                        <a class="header">{{$user->pseudo}}</a>
                    </div>
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







@endsection
