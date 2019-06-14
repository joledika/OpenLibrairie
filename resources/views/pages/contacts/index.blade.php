@extends('templates.default')


@section('title',"Message")
@section('description',"Contacter administrateur")

@section('heading',"Messages")


@section('content')

  <div class="ui comments">
      @forelse($messages as $message)


      <div class="comment">
          <a class="avatar">
          <img src="{{asset('img/elliot.jpg')}}">
          </a>
          <div class="content">
          <a class="author">{{ $message->userExp_id}}</a>
          <div class="metadata">
              <div class="date"></div>
          </div>
          <div class="text">
              <p>
                  {{$message->message}}
              </p>

          </div>

      </div>
      <hr>
      @empty
      @endforelse
  </div>


      <form action="" method="POST" class="ui reply form">
          @csrf
          <div class="field">

          <textarea required name="commentary" placeholder="votre commentaire....."></textarea>
          </div>
          <div class="d-flex justify-content-end">
              <button class="ui primary button" type="submit"><span id="title"><i class="mail icon"></i>Envoyer</span></button>
          </div>
      </form>






@stop
