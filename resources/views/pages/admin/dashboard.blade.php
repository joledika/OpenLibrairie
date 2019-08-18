@extends('pages/admin/template/default')




@section('content')





<div class="ui four column doubling stackable grid container">








  <div class="column">
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
            <div class="ui inverted dimmer">
                <div class="content">
                <div class="center">

                </div>
                </div>
            </div>
            <img style="height:250px;" src="{{asset('home_page/img/team/1.jpg')}}">
            </div>
            <div class="content">
            <a href="" class="header text-center">&nbsp;Livres</a>
            <div class="meta text-center">
                <span class="text">{{$livres}}</span>
            </div>
            </div>

        </div>
    </div>
  </div>
  <div class="column">
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
            <div class="ui inverted dimmer">
                <div class="content">
                <div class="center">

                </div>
                </div>
            </div>
            <img style="height:250px;" src="{{asset('home_page/img/team/2.jpg')}}">
            </div>
            <div class="content">
            <a href="" class="header text-center">&nbsp;Membres</a>
            <div class="meta text-center">
                <span class="text">{{$membres}}</span>
            </div>
            </div>

        </div>
    </div>
  </div>
  <div class="column">
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
            <div class="ui inverted dimmer">
                <div class="content">
                <div class="center">

                </div>
                </div>
            </div>
            <img style="height:250px;" src="{{asset('home_page/img/team/3.jpg')}}">
            </div>
            <div class="content">
            <a href="" class="header text-center">&nbsp;Commentaires</a>
            <div class="meta text-center">
                <span class="text">{{$commentaires}}</span>
            </div>
            </div>

        </div>
    </div>
  </div>
  <div class="column">
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
            <div class="ui inverted dimmer">
                <div class="content">
                <div class="center">

                </div>
                </div>
            </div>
            <img style="height:250px;" src="{{asset('home_page/img/team/4.jpg')}}">
            </div>
            <div class="content">
            <a href="" class="header text-center">&nbsp;Mails</a>
            <div class="meta text-center">
                <span class="text">{{$messages}}</span>
            </div>
            </div>

        </div>
    </div>
  </div>
  <div class="column">
    <div class="ui special cards">
        <div class="card">
            <div class="blurring dimmable image">
            <div class="ui inverted dimmer">
                <div class="content">
                <div class="center">

                </div>
                </div>
            </div>
            <img style="height:250px;" src="{{asset('home_page/img/team/1.jpg')}}">
            </div>
            <div class="content">
            <a href="" class="header text-center">&nbsp;Messages des membres</a>
            <div class="meta text-center">
                <span class="text">0</span>
            </div>
            </div>

        </div>
    </div>
  </div>


</div>



@endsection
