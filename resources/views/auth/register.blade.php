@extends('layouts.app')

@section('title','Register')


@section('form')
    <form class="login100-form validate-form">
        <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
        </span>

        <span class="login100-form-title p-b-34 p-t-27">
            Page d' inscription
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre pseudo">
            <input class="input100" type="text" name="pseudo" placeholder="Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>

        </div>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre Email">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder="&#xf230;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe">
            <input class="input100" type="password" name="password" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Entrer le mot de passe de confirmation">
                <input class="input100" type="password" name="password_confirmation" placeholder="Mot de passe confirmation">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>



        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Inscription
            </button>
        </div>

        <div class="text-center mt-3">
            <a class="txt1" href="{{route('login')}}">
                J' ai déjà un compte
            </a>

        </div>


    </form>




@stop
