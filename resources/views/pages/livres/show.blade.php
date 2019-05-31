@extends('templates.default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')




    <div class="d-flex justify-content-end mt-2">
    @if ($livre->user->name == auth()->user()->name || auth()->user()->account->rank == 1)
          <a href="{{route('edit_book_path',[$livre->category->name,$livre->slug])}}" class="ui tiny teal button" type="submit"><i class="edit icon"></i>Modifier</a>


        <form action="{{ route('delete_book_path',$livre->id) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="ui tiny orange button" type="submit"><i class="trash icon"></i>supprimer</button>

        </form>
    @endif
        {{-- <a href="{{route('get_book_path',[$livre->category->name,$livre->slug])}}" class="ui tiny green button" type="submit"><i class="download icon"></i>télécharger</a> --}}
        <form action="{{route('download_book_path',[$livre->category->name,$livre->slug])}}" method="post">
          @csrf
          @method('PUT')
        <button class="ui tiny green button" type="submit"><i class="download icon"></i>télécharger</button>
      </form>
    </div>


    <div style="margin-top:10px">
        <img class="ui medium centered image" src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}"   >
    </div>
    <div class="ui one column grid mt-2">

        <div class="column">

            <div class="ui raised segment">

                <span class="ui header">{{$livre->title}}</span>
                <hr>
                <p class="text-justify">{!!$livre->description!!}</p>
                <p class="text-justify">{!!$livre->body!!}</p>

            </div>
        </div>

    </div>

    <div class="ui comments">
        @forelse($commentaires as $commentaire)


        <div class="comment">
            <a class="avatar">
            <img src="{{asset('img/elliot.jpg')}}">
            </a>
            <div class="content">
            <a class="author">{{$commentaire->user->name}}</a>
            <div class="metadata">
                <div class="date">{{$commentaire->created_at->diffForHumans()}}</div>
            </div>
            <div class="text">
                <p>
                    {!! $commentaire->commentary !!}
                </p>

            </div>

        </div>
        <hr>
        @empty
        @endforelse
    </div>


        <form action="{{route('add_commentary_path',[$livre->category->name,$livre->slug])}}" method="POST" class="ui reply form">
            @csrf
            <div class="field">
            @if(session()->has('errors'))
            <textarea required style="border:1px solid crimson;box-shadow:.6px .6px crimson" name="commentary" placeholder="votre commentaire.....">{{old('commentary')}}</textarea>
            <span style="color:crimson">Le commentaire doit contenir entre 5 et 500 caractères.</span>

            @else
            <textarea required name="commentary" placeholder="votre commentaire.....">{{old('commentary')}}</textarea>
            @endif
            </div>
            <div class="d-flex justify-content-end">
                <button class="ui primary button" type="submit"><span id="title"><i class="ui add icon"></i>Ajouter commentaire</span></button>
            </div>
        </form>
    </div>



@stop
