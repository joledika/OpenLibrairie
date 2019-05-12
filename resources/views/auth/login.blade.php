@extends('layouts.app')

@section('title','Login')


@section('form')
    <form class="login100-form validate-form">
        <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
        </span>

        <span class="login100-form-title p-b-34 p-t-27">
           Page de connexion
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre pseudo">
            <input class="input100" type="text" name="pseudo" placeholder="Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe">
            <input class="input100" type="password" name="pass" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
                me souvenir
            </label>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
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
