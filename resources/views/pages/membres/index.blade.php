@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')
<div class="filter d-flex justify-content-end">
    <div class="ui floating dropdown violet labeled icon button">
        <i class="filter icon"></i>
        <span class="text">Filtre</span>
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
            <div class="item">
                <div class="ui red empty circular label"></div>
                Important
            </div>
            <div class="item">
                <div class="ui blue empty circular label"></div>
                Announcement
            </div>
            <div class="item">
                <div class="ui black empty circular label"></div>
                Cannot Fix
            </div>
            <div class="item">
                <div class="ui purple empty circular label"></div>
                News
            </div>
            <div class="item">
                <div class="ui orange empty circular label"></div>
                Enhancement
            </div>
            <div class="item">
                <div class="ui empty circular label"></div>
                Change Declined
            </div>
            <div class="item">
                <div class="ui yellow empty circular label"></div>
                Off Topic
            </div>
            <div class="item">
                <div class="ui pink empty circular label"></div>
                Interesting
            </div>
            <div class="item">
                <div class="ui green empty circular label"></div>
                Discussion
            </div>
            </div>
        </div>
    </div>
</div>
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
                    <img style="height:250px;" src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}">
                    </div>
                    <div class="content">
                    <a class="header text-center">{{$user->name}}</a>
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

  {{$users->links()}}
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
