@extends('templates.default')


@section('title',"Ajout livre")
@section('description',"Ajout de livre")

@section('heading',"Ajout de livre")


@section('content')

<div class="mt-3">
        <hr>
          <div class="d-flex justify-content-end">

            <button class="addCat ui violet button"><i class="tags icon"></i>Ajouter un catégorie</button>
          </div>


        <hr>

        <div class="ui modal">
          <div class="header">
            <p><i class="tag icon"></i>Ajout d'un catégorie</p>
          </div>
          <div class="content">
            <p>
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
                      <div class="ui form d-flex justify-content-center actions">
                          <button type="reset" class="ui orange button"><i class="ui trash icon"></i> Réinitianliser </button>
                          <button type="submit" class="ui blue button"><i class="ui book icon"></i> Ajouter</button>
                          <div class="ui red cancel button"><i class="ui delete icon"></i>Annuler</div>
                      </div>

                      </form>


            </p>
          </div>
          <!-- <div class="actions">


          </div> -->
        </div>

        <form action="{{route('store_book_path')}}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="ui form">
                        <div class="field {{ $errors->first('title')?'error':'' }}">
                            <label for="title">Titre</label>
                            <input required type="text" value="{{old('title')}}" name="title" id="title" placeholder="Titre du livre.......">
                            @if($errors->first('title'))
                            <div class="ui pointing red basic label">
                              {{ $errors->first('title') }}
                            </div>
                            @endif
                        </div>

                    </div>
                    <br>


                    <div class="ui large form">
                        <div class="two fields">
                            <div class="field {{ $errors->first('user_id')?'error':'' }}">
                                <label>Auteur</label>
                                <select required  name="user_id">
                                    <option class="ui orange button" value="{{auth()->user()->id}}">Je suis l auteur</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('user_id'))
                                <div class="ui pointing red basic label">
                                  {{ $errors->first('user_id') }}
                                </div>
                                @endif
                            </div>
                            @if($errors->first('category_id'))
                            <div class="ui pointing below red basic label">
                              {{ $errors->first('category_id') }}
                            </div>
                          @endif
                            <div class="field {{ $errors->first('category_id')?'error':'' }}">
                                <label>Catégorie</label>
                                <select required  name="category_id">

                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="ui form">

                        <div class="two fields">
                            <div class="field">
                                    <label>Couverture</label>
                                <input class="ui text-black" type="file" name="image" id="image">
                            </div>
                            <div class="field {{ $errors->first('book')?'error':'' }}">
                                    <label>Livre</label>
                                <input class="ui text-black" type="file" name="book" id="book">
                                @if($errors->first('book'))
                                <div class="ui pointing red basic label">
                                  {{ $errors->first('book') }}
                                </div>
                                @endif
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
<script type="text/javascript">
$('.addCat').click(
  function(){
    $('.ui.modal').modal('show');
  }
)
</script>
<script>
  $('.ui.dropdown')
  .dropdown()
;
</script>

@stop
