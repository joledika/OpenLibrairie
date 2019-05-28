@extends('pages/admin/template/default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')





        <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('category') }}" class="ui green button"><i class="ui tags icon"></i>Catégories</a>
                <a class="ui blue button mr-3" href="{{route('add_book_path')}}"><i class="ui plus icon"></i> Ajout</a>
                     {{--  DROPDOWN FILTER  --}}
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


<hr>


    {{--  END DROPDOWN FILTER  --}}


    <div class="ui four column doubling stackable grid container">



        @forelse ($livres as $livre)
        <div class="column">
                <div class="ui special cards">

                        <div class="card">
                            <div class="ui small content">
                                <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                                    <img class="ui avatar image" src="/storage/{{isset($livre->user->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}">
                                    {{$livre->user->name}}
                                </div>

                          <div class="blurring dimmable image">
                            <div class="ui dimmer">
                              <div class="content">
                                <div class="center">
                                  <a href="{{route('book_path',[$livre->category->name,$livre->slug])}}" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                                </div>
                              </div>
                            </div>
                            <img style="height:250px;"  src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}">

                          </div>
                          <div class="content text-center">
                            <a href="{{route('book_path',[$livre->category->name,$livre->slug])}}" class="header">{{$livre->title}}</a>

                          </div>


                            <div class="meta ml-3">
                                <a class="ui {{$livre->category->color}} small left ribbon label">{{$livre->category->name}}</a>

                            </div>

                            <div class="content">
                            <span class="right floated">

                                <i class="heart like icon"></i>
                                17 likes
                            </span>
                            <i class="comment icon"></i>
                            {{$livre->commentaries()->count()}} commentaires
                            </div>
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
