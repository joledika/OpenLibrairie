@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')
<form action="{{route('put_profile_path',$user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="mt-3">
<div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="ui violet button"><i class="ui check icon"></i>Appliquer les modification</button>
</div>

    <div class="ui two column doubling stackable grid container">
        <div class="column text-center">
                <div class="ui centered card">
                        <div class="image">

                          <img class="ui medium rounded image" src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}">
                        </div>
                        <div class="content">
                          <a class="header"></a>
                        </div>
                      </div>
                      <div  class="mb-2">

                          <span><label for="picture"><i class="ui picture small icon"></i> Pour changer la photo</label></span>
                      </div>
                <span class="ui form">
                    <div class="field">
                        <input type="file" name="picture" id="picture">

                    </div>
                </span>
        </div>
        <div class="column">
            <table class="ui selectable celled table">

                <tbody>
                    <tr>
                    <td><label for="name">Pseudo :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">

                                <input type="text" name="name" value="{{$user->name}}" id="name">
                            </div>
                        </div>

                    </td>

                    </tr>
                    <tr>
                    <td><label for="firstName">Nom :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">

                                <input type="text" name="firstName" value="{{$user->profile->firstName}}" id="firstName">
                            </div>
                        </div>
                    </td>

                    </tr>
                    <tr>
                    <td><label for="lastName">Prénom :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">

                                <input type="text" name="lastName" value="{{$user->profile->lastName}}" id="lastName">
                            </div>
                        </div>
                    </td>

                    </tr>
                    <tr>
                    <td><label for="gender">Sexe :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">

                                <div class="ui form">
                                    <select name="gender" id="gender">

                                        <option value="">Selectionner votre sexe</option>

                                        <option class="item" {{$user->profile->gender=="male"?"selected":""}} value="male">Homme</option>
                                        <option class="item" {{$user->profile->gender=="female"?"selected":""}} value="female">Femme</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </td>

                    </tr>
                    <tr>
                    <td><label for="birth">date de naissance :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">

                                <input type="date" value="{{$user->profile->birth}}" name="birth" id="birth">
                            </div>
                        </div>
                    </td>

                </tr>


                    <tr>
                        <td><label for="phone">Téléphone :</label></td>
                        <td>
                            <div class="ui form">
                                <div class="field">

                                    <input type="tel" name="phone" value="{{$user->profile->phone}}" id="phone">
                                </div>
                            </div>

                        </td>

                    </tr>
                <tr>
                    <td><label for="address">Logement :</label></td>
                    <td>
                        <div class="ui form">
                            <div class="field">
                                <textarea name="address" rows="3" id="address">{{$user->profile->address}}</textarea>
                            </div>
                        </div>
                    </td>

                </tr>


                </tbody>
            </table>

        </div>
        <div class="rows mt-4">
            <div class="ui container">
                <h3 class="ui header">Biographie</h3>
                <div class="ui form">
                    <div class="field">

                        <textarea name="description" id="description" cols="30" rows="10">{{$user->profile->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="ui container">
                <div class="row mt-4">
                    <h3>Contacts</h3>
                        <table class="ui selectable celled table">

                            <tbody>
                                <tr>
                                <td class="text-left"><i class="ui youtube icon"></i><label for="youtube">YouTube</label></td>
                                <td>
                                    <div class="ui form">
                                        <div class="field">

                                            <input type="text" name="youtube" value="{{$user->contact->youtube}}" id="youtube">
                                        </div>
                                    </div>

                                </td>

                                </tr>
                                <tr>
                                <td class="text-left"><i class="ui facebook icon"></i> <label for="facebook">FaceBook </label></td>
                                <td>
                                    <div class="ui form">
                                        <div class="field">

                                            <input type="text" name="facebook" value="{{$user->contact->facebook}}" id="facebook">
                                        </div>
                                    </div>
                                </td>

                                </tr>
                                <tr>
                                <td class="text-left"><i class="ui github icon"></i> <label for="github">GitHub </label></td>
                                <td>
                                    <div class="ui form">
                                        <div class="field">

                                            <input type="text" name="github" value="{{$user->contact->github}}" id="github">
                                        </div>
                                    </div>
                                </td>

                                </tr>
                                <tr>
                                    <td class="text-left"><i class="ui twitter icon"></i> <label for="twitter">Twitter </label></td>
                                    <td>
                                        <div class="ui form">
                                            <div class="field">

                                                <input type="text" name="twitter" value="{{$user->contact->twitter}}" id="twitter">
                                            </div>
                                        </div>
                                    </td>

                                </tr>





                            </tbody>
                        </table>

                </div>
                </div>
            </div>
        </div>
    </div>



</div>
</form>
@stop




