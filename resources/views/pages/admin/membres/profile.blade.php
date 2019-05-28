@extends('pages/admin/template/default')

@section('header','Ton profil')

@section('content')

<div class="mb-3 d-flex justify-content-end">
    <a href="{{route('edit_profile_path',auth()->user()->id)}}" class="ui violet button"><i class="ui edit icon"></i>Modifier</a>
</div>

    <div class="ui two column doubling stackable grid container">
        <div class="column text-center">
                <div class="ui centered card">
                        <div class="image">

                          <img class="ui medium rounded image" src="/storage/{{isset(auth()->user()->profile->picture)?auth()->user()->profile->picture:'users/image/avatar/'.(auth()->user()->profile->gender=='female'?'female':'male').'.png'}}"}}">
                        </div>
                        <div class="content">
                          <a class="header">{{auth()->user()->name}}</a>
                          <span style="color:grey">{{auth()->user()->email}}</span>
                        </div>
                      </div>

             <p>Membre depuis : &nbsp;&nbsp;&nbsp;<code>{{auth()->user()->created_at->format('Y M d')}}</code></p>
        </div>
        <div class="column">
            <table class="ui selectable celled table">

                <tbody>
                    <tr>
                    <td>Pseudo :</td>
                    <td>{{auth()->user()->name}}</td>

                    </tr>
                    <tr>
                    <td>Nom :</td>
                    <td>{{auth()->user()->profile->firstName}}</td>

                    </tr>
                    <tr>
                    <td>Prénom :</td>
                    <td>{{auth()->user()->profile->lastName}}</td>

                    </tr>
                    <tr>
                    <td>Sexe :</td>

                    @if(auth()->user()->profile->gender=="female")
                    <td>Femme</td>
                    @else
                    <td>Homme</td>
                    @endif

                    </tr>
                    <tr>
                    <td>date de naissance :</td>
                    <td>{{auth()->user()->profile->birth}}</td>

                </tr>

                <tr>
                        <td>Téléphone :</td>
                        <td>{{auth()->user()->profile->phone}}</td>

                    </tr>
                <tr>
                    <td>Logement :</td>
                    <td>{{auth()->user()->profile->address}}</td>

                </tr>


                </tbody>
            </table>

        </div>
        <div class="rows mt-4">
            <div class="ui container">
                <div class="ui container">
                    <h3 class="ui header">Biographie</h3>
                    <p>
                        {{auth()->user()->profile->description}}
                    </p>

                </div>
            </div>

            <div class="row mt-4">
                <div class="ui container">
            <h3>Contacts</h3>
                <table class="ui selectable table">

                    <tbody>
                        <tr>
                        <td class="text-danger"><i class="ui youtube icon"></i><span>YouTube</span></td>
                        <td style="color:crimson">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{auth()->user()->contact->youtube??'non disponible'}}</span>
                                </div>
                            </div>

                        </td>

                        </tr>
                        <tr>
                        <td style="color:mediumblue"><i class="ui facebook icon"></i> <span>FaceBook </span></td>
                        <td style="color:mediumblue">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{auth()->user()->contact->facebook??'non disponible'}}</span>
                                </div>
                            </div>
                        </td>

                        </tr>
                        <tr>
                        <td style="color:grey"><i class="ui github icon"></i> <span>GitHub </span></td>
                        <td style="color:grey">
                            <div class="ui form">
                                <div class="field">

                                    <span>{{auth()->user()->contact->github??'non disponible'}}</span>
                                </div>
                            </div>
                        </td>

                        </tr>
                        <tr>
                            <td style="color:cornflowerblue"><i class="ui twitter icon"></i> <span>Twitter </span></td>
                            <td style="color:cornflowerblue">
                                <div class="ui form">
                                    <div class="field">

                                        <span>{{auth()->user()->contact->twitter??'non disponible'}}</span>
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












@endsection
