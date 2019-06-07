@extends('administration/layout/master')



@section('content')

<div class="row">
  <div class="col-md-12">
      <div class="card">
        <img src="{{asset('img/mails/mail.jpg')}}" style="height:300px;width:auto" class="img-fluid" alt="Responsive image">
          {{-- <img class="card-img-top img-responsive" style="height:20%" src="{{asset('img/mails/mail.jpg')}}" alt="Card image cap"> --}}
          <div class="card-body">
              <h4 class="card-title mb-3 text-center">{{$message->name}}</h4>
              <h6 class=" text-center"><code>{{$message->email}}</code></h6>
              <hr>
              <p>Sujet :</p>
              <h4>{{ $message->subject }}</h4>
              <hr>
              <p class="card-text">
                {{ $message->message }}
              </p>
              <hr>
              <div class="d-flex justify-content-end">
                <span>Envoyé le : &nbsp;&nbsp;</span>
                <p>{{ $message->created_at->format('j M Y') }}</p>
              </div>
          </div>
          <hr>
      <div class="row">
        <div class="col-md-6 offset-md-3 mr-auto ml-auto">
          {{-- <section class="card"> --}}
          <div class="card-body text-secondary">
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mr-3">
                  <i class="fa fa-envelope"></i>&nbsp; Repondre
                </button>
                <form class="" action="{{ route('admin_delete_guard_contact_path',$message->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>&nbsp; Supprimer
                  </button>
                </form>

              </div>
            </div>
          {{-- </section> --}}
        </div>
      </div>

      </div>
  </div>
</div>







@stop
