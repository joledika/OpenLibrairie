@extends('administration/layout/master')



@section('content')



<div class="card">
    <div class="row">
        <div class="col col-lg-12">
            <div class="row p-4">
                <div class="col col-md-3">

                </div>
                <div class="col-12 col-md-9">
                <form class="form-header" action="" method="get">
                    @csrf
                    <input class="au-input au-input--xl" type="text" name="recherche" value="{{ $recherche??'' }}" placeholder="Rechercher membres...">
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                </div>
            </div>
            </div>

        </div>
    </div>
    <br>
</div>





    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">

                <i class="zmdi zmdi-account-calendar"></i>Tous les membres</h3>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>photo</td>
                            <td>name</td>
                            <td>role</td>
                            <td>to admin</td>
                            <td>actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>
                                <img class="img avatar"
                                src="/storage/{{isset($user->profile->picture)?$user->profile->picture:'users/image/avatar/'.($user->profile->gender=='female'?'female':'male').'.png'}}"
                                alt="">
                            </td>
                            <td>
                                <div class="table-data__info">
                                    <h6>{{$user->name}}</h6>
                                    <span>
                                        <a>{{$user->email}}</a>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <span class="role {{$user->account_id==1?'admin':'user'}}">{{$user->account_id==1?'admin':'membre'}}</span>
                            </td>
                            <td>


                                <a class="{{$user->account_id==1?"btn btn-outline-primary":"btn btn-outline-danger"}}"
                                    href="{{route('admin_change_account_type',$user->id)}}">
                                    Changer en {{$user->account_id==1?"membre":"admin"}}
                                </a>


                            </td>
                            <td>
                                <div class="d-flex justify-content-around">

                                <form action="{{route('profile_path',$user)}}" method="get">
                                    @csrf
                                    <button class="item" href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Modifier">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </form>
                                <form action="{{route('admin_delete_account_path',$user->id)}}" method="POST" onsubmit="return confirm('Ete vous sur');">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer">
                                        <i class="zmdi zmdi-delete text-danger"></i>
                                    </button>
                                </form>
                            </div>

                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
            @if(!isset($recherche))
                <div class="user-data__footer">
                    <div class="d-flex justify-content-center">
                        {{$users->links()}}

                    </div>
                </div>
            @endif
        </div>
        <!-- END USER DATA-->
    </div>


@endsection




