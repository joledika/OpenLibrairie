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
      content="@yield('description')"
    />

    <meta name="author" content="Mamisoa Olivier Randrianantenaina (Joledika)" />
    <meta name="theme-color" content="#ffffff" />
    <title>{{ env('APP_NAME') }}-administration | @yield('title','Accueil') }}</title>
    <link rel="stylesheet" href="{{asset('dist/bootstrap.min.css')}}">
    <link
      rel="stylesheet"
      href="{{asset('dist/semantic.min.css')}}"
      type="text/css"
    />
      <link rel="shortcut icon" href="{{asset('icons/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('administration/styles/style.css')}}">
  </head>

  <body id="root">
    <div class="ui container">
      @include('pages/admin/template/partials/_navigation')

    </div>

    <div class="ui message">
        contenu
    </div>
  @include('pages/admin/template/partials/_scripts')

  {{-- LES SCRIPTS --}}
  @yield('script')
  </body>
</html>
