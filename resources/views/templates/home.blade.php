<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <meta
      name="description"
      content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI."
    />
    <meta name="keywords" content="Semantic-UI, Theme, Design, Template" />
    <meta name="author" content="PPType" />
    <meta name="theme-color" content="#ffffff" />
    <title>{{env('APP_NAME')}}</title>
    <link rel="shortcut icon" href="{{asset('icons/favicon.png')}}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="{{asset('dist/semantic.min.css')}}"
      type="text/css"
    />
    <link rel="stylesheet" href="{{asset('home/styles/style.css')}}">
  </head>

  <body id="root">
    <div class="ui large top fixed hidden menu">
      <div class="ui container">
        <a href="{{ url('/') }}" class="{{set_active_route('home_path')}} item"><i class="ui home icon"></i>Accueil</a>
        @if(set_active_route('home_path'))
          <a href="#apropos" class="item"><i class="ui user secret icon"></i>Apropos</a>
          <a class="item"><i class="ui copy icon"></i>Services</a>
        @endif
        <a  href="{{ route('contact_path') }}" class="item {{set_active_route('contact_path')}}"><i class="ui phone icon"></i>Contact</a>
        <div class="right menu">
          <div class="item"><a href="{{route('login')}}" class="ui button"><i class="ui sign-in icon"></i>Connexion</a></div>
          <div class="item"><a href="{{route('register')}}" class="ui pink button"><i class="ui save icon"></i>Inscription</a></div>
        </div>
      </div>
    </div>
    <!--Sidebar Menu-->
    <div class="ui vertical inverted sidebar menu">
      <a href="{{ url('/') }}" class="{{set_active_route('home_path')}} item"><i class="ui home icon"></i>Accueil</a>
      @if(set_active_route('home_path'))
        <a href="#apropos" class="item"><i class="ui user secret icon"></i>Apropos</a>
        <a class="item"><i class="ui copy icon"></i>Services</a>
      @endif
      <a href="{{ route('contact_path') }}" class="item {{set_active_route('contact_path')}}"><i class="ui phone icon"></i>Contact</a>
      <a href="{{route('login')}}" class="item"><i class="ui sign-in icon"></i>Connexion</a> <a href="{{route('register')}}" class="item"><i class="ui save icon"></i>Inscription</a>
    </div>
    <!--Page Contents-->

    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">
        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item"><i class="sidebar icon"></i></a>
            <a href="{{ url('/') }}" class="{{set_active_route('home_path')}} item"><i class="ui home icon"></i>Accueil</a>
            @if(set_active_route('home_path'))
              <a href="#apropos" class="item"><i class="ui user secret icon"></i>Apropos</a>
              <a class="item"><i class="ui copy icon"></i>Services</a>
            @endif
            <a href="{{ route('contact_path') }}" class="item {{set_active_route('contact_path')}}"><i class="ui phone icon"></i>Contact</a>
            <div class="right item">
              <a href="{{route('login')}}" class="ui inverted button"><i class="ui sign-in icon"></i>Connexion</a>
              <a href="{{route('register')}}" class="ui inverted button"><i class="ui save icon"></i>Inscription</a>
            </div>
          </div>
        </div>
        <div class="ui text container">
          <h1 class="ui inverted header">{{env('APP_NAME')}}</h1>
          <h2>Bibliothèque numérique 100% <strong>gratuit</strong> <i class="ui smile icon"></i>.</h2>
          <div class="ui huge pink button">
            Get Started <i class="right arrow icon"></i>
          </div>
        </div>
      </div>
      <div class="ui text container">
      @yield('content')
    </div>

      <div class="ui inverted vertical footer segment">
        <div class="ui container">
          <div class="ui stackable inverted divided equal height stackable grid">

            <div class="eight wide column">
              <h4 class="ui inverted header">Copyright &copy; {{ date('Y') }}</h4>
              <div class="ui inverted link list">
                <p>Auteur : <code>Mamisoa Olivier Randrianantenaina</code> </p>
              </div>
            </div>
            <div class="seven wide column">
              <h4 class="ui inverted header">Réseaux sociaux</h4>
              <div class="ui inverted link list">
                <a class="item" href="#"><i class="ui facebook icon"></i>&nbsp;Facebook</a>
                <a class="item" href="#"><i class="ui google icon"></i>&nbsp;Gmail</a>
                <a class="item" href="#"><i class="ui twitter icon"></i>&nbsp;Twitter</a>
                <a class="item" href="#"><i class="ui github icon"></i>&nbsp;Github</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/Jquery.js')}}"></script>
    <script src="{{asset('dist/semantic.min.js')}}"></script>
    @include('templates/home/partials/_scripts')

    @include('flashy::message')
  </body>
</html>
