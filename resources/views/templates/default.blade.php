<!DOCTYPE html>
<html>
  <head lang="fr">
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <meta
      name="description"
      content="@yield('description')"
    />

    <meta name="author" content="Mamisoa" />
    <meta name="theme-color" content="#ffffff" />
    <title>{{env('APP_NAME')}} - @yield('title',"Acceuil")</title>
    <link rel="shortcut icon" href="{{asset('icons/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('dist/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/semantic.min.css')}}">
    <link href="{{asset('home_page/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('css/default.css')}}">
	<script src="{{asset('js/Jquery.js')}}"></script>
    <script src="{{asset('dist/semantic.min.js')}}"></script>




  </head>
  <body>
    <div class="pusher">


      <div class="ui heading vertical segment" style="padding-top:28px">
        <div class="ui container">
            <div class="text-center">
                <h2 class="ui huge header text-center">
                    <a href="{{route('home_path')}}"><span id="title"><i class="ui book icon"></i>OL </span></a>
            </div>
            <div id="subtitle" class="sub header">
                <div class="text-center">
                {{env('APP_NAME')}}
            </div>
                <hr>
                <div>
                  <div class="ui d-flex justify-content-between  text-center">
                      <div style="display:inline-block;">


                            <img class="ui avatar image" src="/storage/{{isset(auth()->user()->profile->picture)?auth()->user()->profile->picture:'users/image/avatar/'.(auth()->user()->profile->gender=='female'?'female':'male').'.png'}}">

                       <a style="color:black;" href="{{ route('profile_path',auth()->user()->id) }}">
                        <p class="mt-2"><code>{{auth()->user()->name}}</code></p>
                      </a>
                    </div>
                    <div class="ml-4 d-flex justify-content-end">
                        <form action="{{route('logout')}}" method="get">
                        @csrf
                        <button class="ui orange button" type="submit"><span id="title"><i class="ui logout icon"></i>Déconnexion</span></button>

                    </form>
                    </div>
                  </div>
                </div>
            </div>
          </h2>


          {{-- NAVIGATION --}}
          @include('templates/partials/_navigation')

          <h3 style="color:#1e70bf;font-family:monospace;" class="ui purge header"><u>@yield('heading',"Titre")</u></h3>

        </div>
      </div>
      <div class="ui demo vertical segment">
        <div class="ui container">
            {{-- CONTENU PRINCIPALE DU SITE --}}
            @yield('content')

        </div>
      </div>
    </div>

      <div class="mt-5">

        @include('templates/partials/_footer')
      </div>

        {{-- LES SCRIPTS UTILISÉS --}}
        @yield('script')





    @include('flashy::message')
  </body>
</html>
