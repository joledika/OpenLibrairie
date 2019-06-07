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
                <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#largeModal">
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

@section('modal')
<!-- modal large -->
<form class="form" action="{{route('admin_response_guard_contact_path',[$message->email,$message->name])}}" method="get">
  @csrf
  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="largeModalLabel"><i class="fa fa-envelope"></i> Reponse mail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <label for="msg">Message</label>
            <textarea class="form-control" name="msg" id="msg" rows="8" cols="80"></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- end modal large -->
@stop
