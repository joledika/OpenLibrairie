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
    <link rel="stylesheet" href="{{asset('dist/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/semantic.min.css')}}">
    <link href="{{asset('home_page/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('icons/fontawesome.min.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">

  </head>
  <body>
    <div class="pusher">


      <div class="ui heading vertical segment" style="padding-top:28px">
        <div class="ui container">
          <h2 class="ui huge header">
            <span id="title"><i class="ui book icon"></i>OL </span>
            <div id="subtitle" class="sub header">
                {{env('APP_NAME')}}
            </div>
          </h2>
          {{-- NAVIGATION --}}
          @include('templates/partials/_navigation')

          <h3 class="ui purge header"><u>@yield('heading',"Titre")</u></h3>

        </div>
      </div>
      <div class="ui demo vertical segment">
        <div class="ui container">
            {{-- CONTENU PRINCIPALE DU SITE --}}
            @yield('content')

        </div>
      </div>
    </div>



    <script>
        {{-- LES SCRIPTS UTILISÉS --}}
    </script>
  </body>
</html>
