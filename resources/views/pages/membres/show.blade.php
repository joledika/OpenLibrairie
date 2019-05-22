@extends('templates.default')


@section('title',"Membres")
@section('description',"liste des membres")

@section('heading',"liste des membres")


@section('content')

<div class="ui two column doubling stackable grid container">
        <div class="column text-center">
                <div class="ui centered card">
                        <div class="image">

                          <img class="ui medium rounded image" src="data:image/jpeg;base64,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">
                        </div>
                        <div class="content">
                          <a class="header">Elyse</a>
                        </div>
                      </div>

                <span>Username</span>
        </div>
        <div class="column">
            <table class="ui selectable celled table">

                <tbody>
                    <tr>
                    <td>Pseudo :</td>
                    <td>No Action</td>

                    </tr>
                    <tr>
                    <td>Nom :</td>
                    <td>Approved</td>

                    </tr>
                    <tr>
                    <td>Prénom :</td>
                    <td>Denied</td>

                    </tr>
                    <tr>
                    <td>Sexe :</td>
                    <td>No Action</td>

                    </tr>
                    <tr>
                    <td>date de naissance :</td>
                    <td>No Action</td>

                </tr>
                <tr>
                    <td>Fonction :</td>
                    <td>No Action</td>

                    </tr>
                <tr>
                    <td>Logement :</td>
                    <td>No Action</td>

                </tr>


                </tbody>
            </table>

        </div>
        <div class="rows mt-4">
            <div class="ui container">
                <h3 class="ui header">Description</h3>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ipsum natus animi officiis laborum soluta, quo tempora quasi, ipsam earum autem fugit inventore, magnam mollitia doloribus labore facilis optio! Dolorem?
                <div class="row">
                    <h3>contact</h3>
                    <div>
                    <ul>
                        <li>conctact1</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>




@stop
