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

      @include('pages/admin/template/partials/_navigation')


      <div class="ui raised very padded text container segment">
        <h2 class="ui header">Dogs Roles with Humans</h2>
        <div class="ui message">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>

  @include('pages/admin/template/partials/_scripts')

  {{-- LES SCRIPTS --}}
  @yield('script')
  </body>
</html>
