@extends('administration/layout/master')



@section('content')

<div class="row">
  @forelse($users as $user)


  <div class="col-md-4">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title mb-3"><i class="users icon"></i>Membres</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="image rounded mx-auto d-block"
                  style="height:250px;"
                  src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}"
                  alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1">{{$user->name}}</h5>
                <div class="location text-sm-center">
                    <i class="mail icon"></i> {{$user->email}}</div>
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
@empty
@endforelse
</div>

<div class="row">
  <div class="col-md-6 offset-md-3 mr-auto ml-auto">
    
      <div class="card-body text-secondary">{{$users->links()}}</div>
    
  </div>
</div>

@endsection
