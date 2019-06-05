@extends('administration/layout/master')



@section('content')

<div class="row">
  @for ($i=1; $i < 5; $i++)


  <div class="col-md-4">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title mb-3"><i class="users icon"></i>Membres</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" src="{{asset('home/img/team/'.$i.'.jpg')}}" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                <div class="location text-sm-center">
                    <i class="mail icon"></i> California, United States</div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#">
                    <i class="facebook icon"></i>
                </a>
                <a href="#">
                    <i class="twitter icon"></i>
                </a>
                <a href="#">
                    <i class="youtube icon"></i>
                </a>
                <a href="#">
                    <i class="google icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endfor
</div>

@endsection
