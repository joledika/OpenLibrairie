@extends('layouts.app')

@section('title','Login')


@section('form')
    <form class="login100-form validate-form" method="POST" action="{{ route('new_password',$user) }}">
      @csrf

        <a href="{{route('home_path')}}">
            <span class="login100-form-logo">
                <i class="zmdi zmdi-book"></i>
            </span>
        </a>

        <span class="login100-form-title p-b-34 p-t-27">
           le nouveau mot de passe
        </span>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
            {!! $errors->first('password','<span style="color:#9B1708">:message</span>')  !!}
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe de confirmation">
            <input class="input100" type="password" name="password_confirmation" placeholder="Mot de passe confirmation">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Réinitialiser maintenant
            </button>

        </div>


    </form>




@stop
