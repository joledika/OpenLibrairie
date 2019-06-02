@extends('templates.default')


@section('title',"Dashboard")
@section('description',"Page d'acceuil de l'espace membre")

@section('heading',"Dashboard")


@section('content')


  <h3 style="color:teal" class="ui header mt-3"><i class="clock icon"></i>Recents livres</h3>
  <div class="ui section divider"></div>
<div>
  <div class="ui four column doubling stackable grid container">





      @forelse ($livresRec as $livre)
      <div class="column">
              <div class="ui special cards">

                      <div class="card">
                          <div class="ui small content">
                              <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                                  {{-- <img class="ui avatar image" src="/storage/{{isset($livre-ser->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}"> --}}
                                  <img class="ui avatar image" src="/storage/{{isset($livre->user->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}">

                              </div>

                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <a href="" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                              </div>
                            </div>
                          </div>
                          {{-- <img style="height:250px;"  src="/storage/{{isset($liv re->image)?$livre->image:'books/image/default.jpg'}}"> --}}
                          <img style="height:250px;"  src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}">

                        </div>
                        <div class="content text-center">
                          <a href="" class="header"></a>

                        </div>


                        <div class="meta ml-3">


                          </div>

                          <div class="content">
                          <span class="right floated">
                            <i class="download icon"></i>

                          </button>
                            {{ $livre->downloaded->downloads }}
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




  <div class="ui section divider"></div>
  <h3 style="color:teal" class="ui header"><i class="star icon"></i>Top livres</h3>
<div class="ui section divider"></div>

  <div class="ui four column doubling stackable grid container">





      @forelse ($livresTop as $livre)
      <div class="column">
              <div class="ui special cards">

                      <div class="card">
                          <div class="ui small content">
                              <div class="right floated meta">{{$livre->created_at->diffForHumans()}}</div>
                                  {{-- <img class="ui avatar image" src="/storage/{{isset($livre-ser->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}"> --}}
                                  <img class="ui avatar image" src="/storage/{{isset($livre->user->profile->picture)?$livre->user->profile->picture:'users/image/avatar/'.($livre->user->profile->gender=='female'?'female':'male').'.png'}}">

                              </div>

                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <a href="" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                              </div>
                            </div>
                          </div>
                          {{-- <img style="height:250px;"  src="/storage/{{isset($liv re->image)?$livre->image:'books/image/default.jpg'}}"> --}}
                          <img style="height:250px;"  src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}">

                        </div>
                        <div class="content text-center">
                          <a href="" class="header"></a>

                        </div>


                        <div class="meta ml-3">


                          </div>

                          <div class="content">
                          <span class="right floated">
                            <i class="download icon"></i>

                          </button>
                            {{ $livre->downloaded->downloads }}
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




@stop

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
