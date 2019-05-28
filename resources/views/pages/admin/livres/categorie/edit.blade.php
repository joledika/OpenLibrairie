@extends('templates.default')


@section('title',"Modification categorie")
@section('description',"Page de modification de categorie")

@section('heading')
  Modification de categorie <span>{{ $categorie->name }}</span>
@endsection

@section('content')

<div class="mt-3">

<div class="d-flex justify-content-end">
  <form action="{{ route('delete_category_path',$categorie->slug) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="ui red button" name="delete"><i class="ui trash icon"></i> Supprimer</button>
  </form>
</div>
        <form action="{{ route('update_category_path',$categorie->slug) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="ui form">
                        <div class="field {{ $errors->first('name')?'error':'' }}">
                            <label for="name">Nom</label>
                            <input required type="text" value="{{ $categorie->name }}" name="name" id="name" placeholder="Titre du livre.......">
                            @if($errors->first('name'))
                            <div class="ui pointing red basic label">
                              {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                    </div>
                    <br>

                    <div class="ui form">
                      <div class="field">

                           <label>Couleur</label>

                             <select name="color">
                               <option  {{$categorie->color=='standard' ?'selected':''}} value="standard">Standard</option>
                               <option  {{$categorie->color=='primary' ?'selected':''}} value="primary">primary</option>
                               <option  {{$categorie->color=='secondary' ?'selected':''}} value="secondary">secondary</option>
                               <option  {{$categorie->color=='red' ?'selected':''}} value="red">red</option>
                               <option  {{$categorie->color=='orange' ?'selected':''}} value="orange">orange</option>
                               <option  {{$categorie->color=='yellow' ?'selected':''}} value="yellow">yellow</option>
                               <option  {{$categorie->color=='olive' ?'selected':''}} value="olive">olive</option>
                               <option  {{$categorie->color=='green' ?'selected':''}} value="green">green</option>
                               <option  {{$categorie->color=='teal' ?'selected':''}} value="teal">teal</option>
                               <option  {{$categorie->color=='blue' ?'selected':''}} value="blue">blue</option>
                               <option  {{$categorie->color=='violet' ?'selected':''}} value="violet">violet</option>
                               <option  {{$categorie->color=='purple' ?'selected':''}} value="purple">purple</option>
                               <option  {{$categorie->color=='pink' ?'selected':''}} value="pink">pink</option>
                               <option  {{$categorie->color=='brown' ?'selected':''}} value="brown">brown</option>
                               <option  {{$categorie->color=='grey' ?'selected':''}} value="grey">grey</option>
                               <option  {{$categorie->color=='black' ?'selected':''}} value="black">black</option>

                             </select>

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
                        <div class="required field {{ $errors->first('description')?'error':'' }}">

                            <textarea required name="description" placeholder="description.....">{{ $categorie->description }}</textarea>
                        </div>

                    </div>
                <br>
                <div class="ui form d-flex justify-content-end">

                    <button type="submit" class="ui blue button"><i class="ui edit icon"></i> Mettre à jour</button>
                </div>

                </form>







</div>







@stop

@section('script')


<script>
        $('.ui.dropdown')
        .dropdown()
      ;
</script>
@stop
