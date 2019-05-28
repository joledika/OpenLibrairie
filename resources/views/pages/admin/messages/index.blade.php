@extends('pages/admin/template/default')

@section('header','Listes des messages')

@section('content')

  <div class="ui four column doubling stackable grid container">
    @forelse ($messages as $message)




    <div class="column">

      <div class="card">
        <div class="content p-2">
          <div class="header text-center"><b>{{$message->name}}</b></div>
          <p class="text-center">
            <span>{{ $message->subject }}</span>
          </p>
          <hr>
          <div class="description text-justify">
            {{str_limit($message->message,100 )}}
          </div>
        </div>
        <a href="{{ route('show_guard_contact_path',$message) }}" class="ui blue bottom attached button">
          <i class="eye icon"></i>
          Regarder le message
        </a>
      </div>

    </div>
  @empty
    <div class="ui icon message" >
        <i class="info icon"></i>
        <div class="content">
            <div class="header">
                Auncun enregistrement
            <p>Désolé, il n'y pas de message en ce moment.</p>
            </div>
        </div>
    </div>
  @endforelse
  </div>






@endsection
