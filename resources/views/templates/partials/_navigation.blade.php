<div class="ui four item stackable tabs menu">
    <a href="{{ route('dashboard_path') }}" class="item {{set_active_route('dashboard_path')}}" data-tab="Membres"><i class="home icon"></i>Acceuil</a>
    <a href="{{route('members_path')}}" class="item {{set_active_route('members_path')}}" data-tab="Membres"><i class="users icon"></i>Membres</a>
    <a href="{{route('books_path')}}" class="item {{set_active_route('books_path')}}" data-tab="Livres"><i class="book icon"></i>Livres</a>

     <a href="{{route('profile_path',auth()->user()->id)}}" class="item {{set_active_route('profile_path')}}" data-tab="Profile"><i class="user icon"></i>Mon compte</a>
</div>
