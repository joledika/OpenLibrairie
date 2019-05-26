<div class="ui tablet computer only padded grid">
  <div class="ui borderless fluid huge menu">
    <a class="active item"><i class="ui home icon"></i>Accueil</a>
    <a class="item"><i class="ui users icon"></i>Membres</a>
    <a class="item"><i class="ui book icon"></i>Livres</a>
    <a class="item"><i class="ui envelope icon"></i>Messages</a>

    <a class="item"><i class="ui wechat icon"></i>Discussions</a>

    {{-- <a class="ui dropdown item">
      Dropdown <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item">Action</div>
        <div class="item">Another action</div>
        <div class="item">Something else here</div>
        <div class="ui divider"></div>
        <div class="header">Navbar header</div>
        <div class="item">Seperated link</div>
        <div class="item">One more seperated link</div>
      </div>
    </a> --}}
    <div class="right menu">
      <form action="{{route('logout')}}" method="get">
        @csrf
      <button class="ui black button mt-2"><i class="ui logout icon"></i> Deconnexion</a></button>
      </form>
    </div>
  </div>
</div>
<div class="ui mobile only padded grid">
  <div class="ui borderless huge fluid menu">
    <a class="header item"><i class="ui book icon"></i>{{env('APP_NAME')}}</a>
    <div class="right menu">
      <div class="item">
        <button class="ui icon toggle basic button">
          <i class="content icon"></i>
        </button>
      </div>
    </div>
    <div class="ui vertical borderless fluid menu">
      <a class="active item"><i class="ui home icon"></i>Accueil</a>
      <a class="item"><i class="ui users icon"></i>Membres</a>
      <a class="item"><i class="ui book icon"></i>Livres</a>
      <a class="item"><i class="ui envelope icon"></i>Messages</a>

      <a class="item"><i class="ui wechat icon"></i>Discussions</a>


      <div class="right menu">
        <form action="{{route('logout')}}" method="get">
          @csrf
        <button class="ui black button"><i class="ui logout icon"></i>Deconnexion</a></button>
        </form>
      </div>

  </div>
</div>
