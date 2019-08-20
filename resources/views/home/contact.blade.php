@extends('templates/home')


@section('content')



  <div class="form" style="margin:4% auto">
    <h2 style="text-align:center">Bibliothèque numérique 100% <strong>gratuite</strong> <i class="ui smile icon"></i>.</h2>
    <hr>
    <br>
    <form action="{{URL('contact/store')}}" method="post" class="ui form">
      @csrf
      <div class="field {{ $errors->first('name')?'error':'' }}">
        <label for="name">Nom</label>
        <input value="{{old('name')}}" required type="text" id='name' name="name" placeholder="Alexandria">
        @if($errors->first('title'))
          <div class="ui pointing red basic label">
              {{ $errors->first('name') }}
          </div>
        @endif
      </div>
      <div class="field {{ $errors->first('email')?'error':'' }}">
        <label for="email">Adresse mail</label>
        <input value="{{old('email')}}" required type="email" class="ui form" name="email" id="email" placeholder="Jhon@doe.com">
        @if($errors->first('email'))
          <div class="ui pointing red basic label">
              {{ $errors->first('email') }}
          </div>
        @endif
      </div>
      <div class="field {{ $errors->first('subject')?'error':'' }}">
        <label for="subject">Sujet</label>
        <input value="{{old('subject')}}" required type="text" class="ui form" name="subject" id="subject" placeholder="Activation du compte">
        @if($errors->first('subject'))
          <div class="ui pointing red basic label">
              {{ $errors->first('subject') }}
          </div>
        @endif
      </div>
      <div class="field {{ $errors->first('message')?'error':'' }}">
        <textarea name="message" required rows="8" cols="80" class="ui form" placeholder="Votre message.....">{{ old('message') }}</textarea>
        @if($errors->first('message'))
          <div class="ui pointing red basic label">
              {{ $errors->first('message') }}
          </div>
        @endif
      </div>

      <button class="ui primary button" type="submit"><i class="ui mail icon"></i>Envoyer le message</button>
    </form>

  </div>









@endsection
