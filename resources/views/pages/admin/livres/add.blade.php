@extends('pages/admin/template/default')


{{--  @section('title',"Ajout livre")
@section('description',"Ajout de livre")

@section('heading',"Ajout de livre")  --}}


@section('content')

<div class="mt-3">

        <form action="{{url('books/add')}}" method="POST" enctype="multipart/form-data">
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
