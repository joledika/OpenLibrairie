@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')

<div class="mt-3">
    {{--  DROPDOWN FILTER  --}}
    {{--  <div class="d-flex justify-content-end mb-3">

            <div class="ui compact menu">
                <div class="ui simple dropdown item">
                    <i class="filter icon"></i>
                    Filtrer
                    <i class="dropdown icon"></i>
                    <div class="menu">

                    <a hreff="#" class="item">Choice 1</a>
                    <a hreff="#" class="item">Choice 2</a>
                    <a hreff="#" class="item">Choice 3</a>
                    </div>
                </div>
            </div>  --}}
            <div class="d-flex justify-content-end mb-3">
            <div class="ui multiple dropdown">
                <input type="hidden" name="filters">
                <i class="filter icon"></i>
                <span class="text">Filter Posts</span>
                <div class="menu">
                  <div class="ui icon search input">
                    <i class="search icon"></i>
                    <input type="text" placeholder="Search tags...">
                  </div>
                  <div class="divider"></div>
                  <div class="header">
                    <i class="tags icon"></i>
                    Tag Label
                  </div>
                  <div class="scrolling menu">
                    <div class="item" data-value="important">
                      <div class="ui red empty circular label"></div>
                      Important
                    </div>
                    <div class="item" data-value="announcement">
                      <div class="ui blue empty circular label"></div>
                      Announcement
                    </div>
                    <div class="item" data-value="cannotfix">
                      <div class="ui black empty circular label"></div>
                      Cannot Fix
                    </div>
                    <div class="item" data-value="news">
                      <div class="ui purple empty circular label"></div>
                      News
                    </div>
                    <div class="item" data-value="enhancement">
                      <div class="ui orange empty circular label"></div>
                      Enhancement
                    </div>
                    <div class="item" data-value="off-topic">
                      <div class="ui yellow empty circular label"></div>
                      Off Topic
                    </div>
                    <div class="item" data-value="interesting">
                      <div class="ui pink empty circular label"></div>
                      Interesting
                    </div>
                    <div class="item" data-value="discussion">
                      <div class="ui green empty circular label"></div>
                      Discussion
                    </div>
                  </div>
                </div>
              </div>
            </div>



    {{--  END DROPDOWN FILTER  --}}
    {{--  </div>  --}}

    {{--  <div class="ui link cards">



            @forelse ($livres as $livre)



            <div class="card">
                <div class="ui small content">
                    <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                    <img class="ui avatar image" src="{{asset('img/helen.jpg')}}">{{$livre->user->name}}
                  </div>

            <div class="image">

            <img src="{{asset('img/helen.jpg')}}">

            </div>
            <div class="content">
            <div class="header"><a href="{{route('book_path',[$livre->category->name,$livre])}}">Titre du livre</a></div>
            <div class="meta">
                <a class="ui orange small left ribbon label">{{$livre->category->name}}</a>

            </div>

            <div class="content">
            <span class="right floated">
                <i class="heart outline like icon"></i>
                <i class="heart like icon"></i>
                17 likes
            </span>
            <i class="comment icon"></i>
            {{$livre->commentaries()->count()}} commentaires
            </div>
            </div>
        </div>

        @empty
        <div class="ui icon message mt-5" >
            <i class="info icon"></i>
            <div class="content">
                <div class="header">
                    Auncun enregistrement
                <p>Désolé, il n'y pas d'enregistrement en ce moment.</p>
                </div>
            </div>
        </div>
        @endforelse

    </div>  --}}


    <div class="ui special cards">
        @forelse ($livres as $livre)
        <div class="card">
            <div class="ui small content">
                <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                    <img class="ui avatar image" src="{{asset('img/helen.jpg')}}">{{$livre->user->name}}
                </div>

          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  <a href="{{route('book_path',[$livre->category->name,$livre])}}" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                </div>
              </div>
            </div>
            <img src="{{asset('img/helen.jpg')}}">
          </div>
          <div class="content text-center">
            <a href="{{route('book_path',[$livre->category->name,$livre])}}" class="header">{{$livre->title}}</a>

          </div>


            <div class="meta ml-3">
                <a class="ui orange small left ribbon label">{{$livre->category->name}}</a>

            </div>

            <div class="content">
            <span class="right floated">
                {{--  <i class="heart outline like icon"></i>  --}}
                <i class="heart like icon"></i>
                17 likes
            </span>
            <i class="comment icon"></i>
            {{$livre->commentaries()->count()}} commentaires
            </div>
            </div>
        </div>

        @empty
        <div class="ui icon message mt-5" >
            <i class="info icon"></i>
            <div class="content">
                <div class="header">
                    Auncun enregistrement
                <p>Désolé, il n'y pas d'enregistrement en ce moment.</p>
                </div>
            </div>
        </div>
        @endforelse
    </div>








</div>

@endsection

@section('script')
<script>
$('.special.cards .image').dimmer({
    on: 'hover'
  });
</script>
<script>
    $('.ui.dropdown')
  .dropdown()
;
</script>
@endsection





