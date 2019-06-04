@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')
  <div class="d-flex justify-content-end">


               <div class="mr-4">
                 <div class="ui icon search input mr-3">
                  <form class="ui form" action="{{route('members_path')}}" method="get">
                   <div class="ui action input mr-3">
                       @csrf
                       <input type="text" name="recherche" value="{{ $recherche??'' }}" placeholder="Rechercher.....">
                          <button class="ui icon button">
                            <i class="search icon"></i>
                          </button>
                    </div>
                  </form>
                 </div>
               </div>




  </div>


<hr>
<div class="mt-3">
    <div class="ui four column doubling stackable grid container">
            @forelse($users as $user)
        <div class="column">
            <div class="ui special cards">
                <div class="card">
                    <div class="blurring dimmable image">
                    <div class="ui inverted dimmer">
                        <div class="content">
                        <div class="center">
                            <a href="profil/{{$user->id}}" class="ui primary button"><i class="ui eye icon"></i> voir son profil</a>
                        </div>
                        </div>
                    </div>
                    <img class="ui image" style="height:200px;" src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}">
                    </div>
                    <div class="content">
                    <a style="font-family:monospace" href="profil/{{$user->id}}" class="header text-center">{{$user->name}}</a>
                    <div class="meta text-center">
                        <span class="text">{{$user->email}}</span>
                    </div>
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


</div>

<hr>

<div class="d-flex justify-content-center mt-4">
@if (!isset($recherche))
  {{$users->links()}}

@endif
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
@stop
