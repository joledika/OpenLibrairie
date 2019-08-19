@extends('pages/admin/template/default')


@section('title',"Ajout catégorie")
@section('description',"Page d'ajout de catégorie")

@section('heading',"Ajout de catégorie")


@section('content')

<div class="mt-3">

        <form action="{{ route('store_category_path') }}" method="POST">
                @csrf

                    <div class="ui form">
                        <div class="field {{ $errors->first('name')?'error':'' }}">
                            <label for="name">Nom</label>
                            <input required type="text" value="{{ old('name') }}" name="name" id="name" placeholder="Titre du livre.......">
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
                           <div class="ui selection dropdown">
                             <input type="hidden" name="color">
                             <div class="default text">Choisir couleur</div>
                             <i class="dropdown icon"></i>
                             <div class="menu">
                               <div class="item" data-value="visa">

                                 Standard
                               </div>
                               <div class="item" data-value="primary">

                                 Primary
                               </div>
                               <div class="item" data-value="secondary">

                                 Secondary
                               </div>
                               <div class="item" data-value="red">

                                 Red
                               </div>
                               <div class="item" data-value="orange">

                                 Orange
                               </div>
                               <div class="item" data-value="yellow">

                                 Yellow
                               </div>
                               <div class="item" data-value="olive">

                                 Olive
                               </div>
                               <div class="item" data-value="green">

                                 Green
                               </div>
                               <div class="item" data-value="teal">

                                 Teal
                               </div>
                               <div class="item" data-value="blue">

                                 Blue
                               </div>
                               <div class="item" data-value="violet">

                                 Violet
                               </div>
                               <div class="item" data-value="purple">

                                 Purple
                               </div>
                               <div class="item" data-value="pink">

                                 Pink
                               </div>
                               <div class="item" data-value="brown">

                                 Brown
                               </div>
                               <div class="item" data-value="grey">

                                 Grey
                               </div>
                               <div class="item" data-value="black">

                                 Black
                               </div>
                             </div>
                           </div>
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

                            <textarea required name="description" placeholder="description.....">{{ old('description') }}</textarea>
                        </div>

                    </div>
                <br>
                <div class="ui form d-flex justify-content-end">
                        <button type="reset" class="ui orange button"><i class="ui delete icon"></i> Réinitianliser </button>
                    <button type="submit" class="ui blue button"><i class="ui book icon"></i> Ajouter</button>
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
