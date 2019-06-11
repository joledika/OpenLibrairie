<div class="ui attached stackable menu">
  <div class="ui container">
    <a href="{{ route('admin_home_path') }}" class="item {{ set_active_route('admin_home_path') }}">
      <i class="home icon"></i> Accueil
    </a>
    <a href="{{ route('admin_members_path') }}" class="item {{ set_active_route('admin_members_path') }}{{  set_active_route('profile_path') }} {{  set_active_route('edit_profile_path') }}">
      <i class="users icon"></i> Membres
    </a>
    <a href="{{ route('books_path') }}" class="item {{ set_active_route('books_path') }}{{  set_active_route('edit_book_path') }} {{  set_active_route('get_book_path') }}">
        <i class="book icon"></i> Livres
    </a>
    {{--  <a  href="{{ route('guard_contact_path') }}" class="item {{ set_active_route('guard_contact_path') }}{{  set_active_route('show_guard_contact_path') }}">
      <i class="mail icon"></i> Messages
    </a>  --}}
    <a class="item">
      <i class="wechat icon"></i> Discussions
    </a>
    <a  href="{{ route('admin_profile_path',auth()->user()->id) }}" class="item {{ set_active_route('admin_profile_path')}}">
      <i class="user icon"></i>Profil
    </a>

    <div class="right item">
      <a href="{{route('logout')}}" class="item"><i class="logout icon"></i>Deconnexion</a>
    </div>
  </div>
</div>
