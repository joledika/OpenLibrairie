@extends('layouts.app')

@section('title','Login')


@section('form')
    <form class="login100-form validate-form" method="POST" action="{{url('login')}}">
      @csrf

        <a href="{{route('home_path')}}">
            <span class="login100-form-logo">
                <i class="zmdi zmdi-book"></i>
            </span>
        </a>

        <span class="login100-form-title p-b-34 p-t-27">
           Page de connexion
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre email">
            <input value="{{ old('name') }}" class="input100" type="text" name="name" placeholder="Email or Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
            {!! $errors->first('email','<span style="color:#9B1708">:message</span>')  !!}
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1">
                me souvenir
            </label>
        </div>

        <div class="container-login100-form-btn">
            <button type="submit" value="Connexion" class="login100-form-btn">
                Connexion
            </button>

        </div>

        <div class="text-center mt-3">
            <a class="txt1 pr-4" href="#">
                Mot de passe oublié?
            </a>
            <a class="txt1 pl-4" href="{{route('register')}}">
                Créer un compte
            </a>
        </div>
    </form>




@stop
