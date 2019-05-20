@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')
<form action="{{route('put_book_path',[$livre->category->name,$livre->slug])}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
    <div class="ui form">
        <div class="field">
            <label for="title">Titre</label>
            <input required type="text" value="{{$livre->title}}" name="title" id="title" placeholder="Titre du livre.......">
        </div>

    </div>
    <br>
    <div class="ui form">
        <div class="required field">
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
        <div class="field">
            <input class="ui file" type="file" name="book" id="book">
        </div>
    </div>
    <br>
    <div class="ui form">
        <div class="required field">
            {{--  <label class="sronly">Description</label>  --}}
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


