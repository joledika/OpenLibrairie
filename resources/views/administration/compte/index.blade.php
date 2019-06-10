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
                    <input class="au-input au-input--xl" type="text" name="recherche" value="" placeholder="Rechercher membres...">
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

            <div class="table-responsive table-data">
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
                                <label class="switch switch-3d switch-primary mr-3">
                                    <input type="checkbox" class="switch-input" {{$user->account_id==1?"checked":""}}>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Envoyer un message">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Modifier">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>

                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="user-data__footer">
                <div class="d-flex justify-content-center">
                    {{$users->links()}}

                </div>
            </div>
        </div>
        <!-- END USER DATA-->
    </div>


@endsection
