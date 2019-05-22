<div class="ui three item stackable tabs menu">
    <a href="{{route('members_path')}}" class="item {{set_active_route('members_path')}}" data-tab="Membres">Membres</a>
    <a href="{{route('books_path')}}" class="item {{set_active_route('books_path')}}" data-tab="Livres">Livres</a>
    <a class="item {{set_active_route('discussions_path')}}" data-tab="Discussions">Discussions</a>
    {{--  <a href="{{route('profile_path',auth()->user()->id)}}" class="item" data-tab="Profile">Mon compte</a>  --}}
    {{--  <a href="{{route('posts_path')}}" class="item {{set_active_route('posts_path')}}" data-tab="blog">Blog</a>  --}}
</div>
