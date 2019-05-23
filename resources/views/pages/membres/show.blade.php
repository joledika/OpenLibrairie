@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')
<div class="mt-3">
<div class="mb-3 d-flex justify-content-end">
    <a href="{{route('edit_profile_path',$user->id)}}" class="ui violet button"><i class="ui edit icon"></i>Modifier</a>
</div>

    <div class="ui two column doubling stackable grid container">
        <div class="column text-center">
                <div class="ui centered card">
                        <div class="image">

                          <img class="ui medium rounded image" src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}"}}">
                        </div>
                        <div class="content">
                          <a class="header">{{$user->name}}</a>
                          <span style="color:grey">{{$user->email}}</span>
                        </div>
                      </div>

             <p>Membre depuis : &nbsp;&nbsp;&nbsp;<code>{{$user->created_at->format('Y M d')}}</code></p>
        </div>
        <div class="column">
            <table class="ui selectable celled table">

                <tbody>
                    <tr>
                    <td>Pseudo :</td>
                    <td>{{$user->name}}</td>

                    </tr>
                    <tr>
                    <td>Nom :</td>
                    <td>{{$user->profile->firstName}}</td>

                    </tr>
                    <tr>
                    <td>Prénom :</td>
                    <td>{{$user->profile->lastName}}</td>

                    </tr>
                    <tr>
                    <td>Sexe :</td>

                    @if($user->profile->gender=="female")
                    <td>Femme</td>
                    @else
                    <td>Homme</td>
                    @endif

                    </tr>
                    <tr>
                    <td>date de naissance :</td>
                    <td>{{$user->profile->birth}}</td>

                </tr>
                <tr>
                    <td>Fonction :</td>
                    <td>No Action</td>

                    </tr>
                <tr>
                    <td>Logement :</td>
                    <td>{{$user->profile->address}}</td>

                </tr>


                </tbody>
            </table>

        </div>
        <div class="rows mt-4">
            <div class="ui container">
                <h3 class="ui header">Description</h3>
                <p>
                    {{$user->profile->description}}
                </p>

            </div>

        </div>
        <div class="row mt-4">
            <h3>Contact</h3>
                <table class="ui selectable table">

                    <tbody>
                        <tr>
                        <td class="text-danger"><i class="ui youtube icon"></i><span>YouTube</span></td>
                        <td style="color:crimson">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{$user->contact->youtube}}</span>
                                </div>
                            </div>

                        </td>

                        </tr>
                        <tr>
                        <td style="color:mediumblue"><i class="ui facebook icon"></i> <span>FaceBook </span></td>
                        <td style="color:mediumblue">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{$user->contact->facebook}}</span>
                                </div>
                            </div>
                        </td>

                        </tr>
                        <tr>
                        <td style="color:grey"><i class="ui github icon"></i> <span>GitHub </span></td>
                        <td style="color:grey">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{$user->contact->github}}</span>
                                </div>
                            </div>
                        </td>

                        </tr>
                        <tr>
                            <td style="color:cornflowerblue"><i class="ui twitter icon"></i> <span>Twitter </span></td>
                            <td style="color:cornflowerblue">
                                <div class="ui form">
                                    <div class="field">

                                        <span>{{$user->contact->twitter}}</span>
                                    </div>
                                </div>
                            </td>

                        </tr>





                    </tbody>
                </table>

        </div>
    </div>



</div>

@stop
