@extends('layouts.app')

@section('title','Register')


@section('form')
    <form action="register" method="post" class="login100-form validate-form">
        @csrf
        <a href="{{route('home_path')}}">
            <span class="login100-form-logo">
                <i class="zmdi zmdi-book"></i>
            </span>
        </a>

        <span class="login100-form-title p-b-34 p-t-27">
            Page d' inscription
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre pseudo">
            <input class="input100" type="text" value="{{old('name')}}" name="name" placeholder="Pseudo">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>

            {!! $errors->first('name','<span style="color:#9B1708">:message</span>')  !!}
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Entrer votre Email">
            <input class="input100" type="text" value="{{old('email')}}" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder="&#xf230;"></span>
            {!! $errors->first('email','<span style="color:#9B1708">:message</span>')  !!}
        </div>

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
