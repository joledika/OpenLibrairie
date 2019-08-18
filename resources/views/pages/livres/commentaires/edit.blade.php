@extends('templates.default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')
<div class="mt-3 mb-3">
  <h3>Modifier votre commentaire</h3>
</div>
<hr>
  <form action="{{ route('update_commentary_path',[$category,$slug,$commentary->id]) }}" method="POST" class="ui reply form">
      @csrf
      @method('PUT')
      <div class="field">
      @if(session()->has('errors'))
      <textarea required style="border:1px solid crimson;box-shadow:.6px .6px crimson" name="commentary" placeholder="votre commentaire.....">{{old('commentary')}}</textarea>
      <span style="color:crimson">Le commentaire doit contenir entre 5 et 500 caractères.</span>

      @else
      <textarea required name="commentary" placeholder="votre commentaire.....">{{$commentary->commentary}}</textarea>
      @endif
      </div>
      <div class="d-flex justify-content-end">
          <button class="ui primary button" type="submit"><span id="title"><i class="ui edit icon"></i>modifier</span></button>
      </div>
  </form>



@stop
