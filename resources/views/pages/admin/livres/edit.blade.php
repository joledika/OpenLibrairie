@extends('pages/admin/template/default')


{{--  @section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")  --}}


@section('content')
<form action="{{route('put_book_path',[$livre->category->name,$livre->slug])}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="ui form">
        <div class="field {{ $errors->first('title')?'error':'' }}">
            <label for="title">Titre</label>
            <input required type="text" value="{{$livre->title}}" name="title" id="title" placeholder="Titre du livre.......">
            @if($errors->first('title'))
            <div class="ui pointing red basic label">
              {{ $errors->first('title') }}
            </div>
            @endif
        </div>

    </div>
    <br>
    <div class="ui form">
      @if($errors->first('category_id'))
      <div class="ui pointing below red basic label">
        {{ $errors->first('category_id') }}
      </div>
      @endif
        <div class="required field {{ $errors->first('category_id')?'error':'' }}">
            <select required  name="category_id">
                <option disabled value="">Catégorie</option>
                @foreach($categories as $category)
                <option {{$livre->category->name==$category->name?"selected":""}} value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="ui form">
        <div class="two fields">
            <div class="field">
                    <label>Couverture</label>
                <input class="ui text-black" type="file" name="image" id="image">
            </div>
            <div class="field">
                    <label>Livre</label>
                <input class="ui text-black" type="file" name="book" id="book">
            </div>
        </div>
    </div>
    <br>
    <div class="ui form">
      @if($errors->first('description'))
      <div class="ui pointing below red basic label">
        {{ $errors->first('description') }}
      </div>
      @endif
        <div class="required field">

            <textarea required name="description" placeholder="description.....">{{$livre->description}}</textarea>
        </div>

    </div>
<br>
<div class="ui form d-flex justify-content-end">
        <button type="reset" class="ui orange button"><i class="ui delete icon"></i> Réinitianliser </button>
    <button type="submit" class="ui blue button"><i class="ui edit icon"></i> Mettre à jour</button>
</div>

</form>




@endsection
