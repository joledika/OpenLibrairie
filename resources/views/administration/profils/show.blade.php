@extends('administration/layout/master')



@section('content')

<section class="card">
  <div class="card-body text-secondary">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <i class="fa fa-user"></i>
                <strong class="card-title pl-2">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded mx-auto d-block" width="300"
                      src="/storage/{{isset(auth()->user()->profile->picture)?auth()->user()->profile->picture:'users/image/avatar/'.(auth()->user()->profile->gender=='female'?'female':'male').'.png'}}" alt="{{auth()->user()->name}}"
                      alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i> California, United States</div>
                </div>


            </div>
        </div>
    </div>

    </div>
  </div>
<hr>
  <div class="row">

    <div class="col-lg-1">

    </div>
    <div class="col-lg-10">
      <!-- DATA TABLE-->

      <table class="table table-borderless table-data3">
        <div class="text-center">
          <h3 class="pb-2 display-5"> <i class="user secret icon"></i>Information personnel</h3>
        </div>
        <hr>
        <thead>
          <tr>
            <th><i class="info icon"></i>Info</th>
            <th><i class="info icon"></i>Valeur</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pseudo</td>
            <td>{{auth()->user()->name}}</td>

          </tr>
          <tr>
            <td>Nom</td>
            <td>{{auth()->user()->profile->firstName}}</td>

          </tr>
          <tr>
            <td>Prénoms</td>
            <td>{{auth()->user()->profile->lastName}}</td>

          </tr>
          <tr>
            <td>Sexe</td>
            <td>{{auth()->user()->profile->gender}}</td>

          </tr>
          <tr>
            <td>Date de naissance</td>
            <td>{{auth()->user()->profile->birth}}</td>

          </tr>
          <tr>
            <td>Adresse</td>
            <td>{{auth()->user()->profile->address}}</td>

          </tr>
          <tr>
            <td>Téléphone</td>
            <td>{{auth()->user()->profile->phone}}</td>

          </tr>

        </tbody>
      </table>

      <!-- END DATA TABLE-->

    </div>
    <div class="col-lg-1">

    </div>
    <hr>
    <div class="row mt-3">
      <div class="col col-lg-1">

      </div>
      <hr>
      <div class="col col-lg-10">

        <div class="card-body text-secondary ml-5">
          <h3>Biographie</h3>

          <p>
            {{auth()->user()->profile->description?? 'rien a dire!!!!'}}
          </p>
        </div>

      </div>
      <div class="col col-lg-1">

      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-1">

    </div>
    <div class="col-lg-10">
      <!-- DATA TABLE-->

      <table class="table table-borderless table-data3">
        <div class="text-center">
          <h3 class="pb-2 display-5"> <i class="user secret icon"></i>Contacts</h3>
        </div>
        <hr>
        <thead>
          <tr>
            <th><i class="info icon"></i>Info</th>
            <th><i class="info icon"></i>Valeur</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td><i class="facebook icon"></i>Facebook</td>
            <td>{{auth()->user()->contact->facebook}}</td>

          </tr>
          <tr>
            <td><i class="twitter icon"></i>Twitter</td>
            <td>{{auth()->user()->contact->twitter}}</td>

          </tr>
          <tr>
            <td><i class="github icon"></i>GitHub</td>
            <td>{{auth()->user()->contact->github}}</td>

          </tr>
          <tr>
            <td><i class="youtube icon"></i>Youtube</td>
            <td>{{auth()->user()->contact->youtube}}</td>

          </tr>

        </tbody>
      </table>

      <!-- END DATA TABLE-->

    </div>

</section>









@stop
