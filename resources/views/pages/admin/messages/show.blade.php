@extends('pages/admin/template/default')

@section('header')
<div class="">
  <span>Message de {{ $message->name }}</span><br>




</div>
@endsection

@section('content')
<div class="ui segments">
  <div class="ui segment">
    <p>Suject</p>
    <p>
      {{ $message->subject }}
    </p>
  </div>
  <div class="ui segment">
    <p>Message</p>
      <p>
        {{ $message->message }}
      </p>
  </div>
</div>
<p>
  <span class="d-block text-center">Date : {{ $message->created_at->diffForHumans() }} par <code> {{ $message->email }}</code></span>
</p>
<hr>
<div class="text-center">
  <button type="button" class="ui primary button" name="button"><i class="mail icon"></i> Repondre</button>
  <button type="button" class="ui red button" name="button"><i class="trash icon"></i> Supprimer</button>

</div>
@endsection
