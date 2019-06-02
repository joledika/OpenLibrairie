<div class="ui five item stackable tabs menu">
    <a href="" class="item " data-tab="Membres">Acceuil</a>
    <a href="{{route('members_path')}}" class="item {{set_active_route('members_path')}}" data-tab="Membres">Membres</a>
    <a href="{{route('books_path')}}" class="item {{set_active_route('books_path')}}" data-tab="Livres">Livres</a>
    <a class="item {{set_active_route('discussions_path')}}" data-tab="Discussions">Contacter l'admin</a>
     <a href="{{route('profile_path',auth()->user()->id)}}" class="item {{set_active_route('profile_path')}}" data-tab="Profile">Mon compte</a>
</div>
