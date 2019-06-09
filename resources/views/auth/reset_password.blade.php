@extends('layouts.app')

@section('title','Login')


@section('form')
    <form class="login100-form validate-form" method="POST" action="{{ route('check_user') }}">
      @csrf

        <a href="{{route('home_path')}}">
            <span class="login100-form-logo">
                <i class="zmdi zmdi-book"></i>
            </span>
        </a>

        <span class="login100-form-title p-b-34 p-t-27">
           mot de passe perdu
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre email ou Pseudo">
            <input value="{{ old('name') }}" class="input100" type="text" name="name" placeholder="Email or Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
            {!! $errors->first('name','<span style="color:#9B1708">:message</span>')  !!}
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Réinitialiser
            </button>

        </div>

        <div class="text-center mt-3">
            <a class="txt1 pr-4" href="{{ route('login') }}">
                Revenir en arrière
            </a>
            <a class="txt1 pl-4" href="{{route('register')}}">
                Créer un compte
            </a>
        </div>
    </form>




@stop
