@extends('administration/layout/master')



@section('content')
  <div class="row">
    <div class="col col-lg-12">
      <section class="card">
        <div class="card-body text-secondary">
          <div class="row form-group mt-3">
            <div class="col-md-6 offset-md-3 mr-auto ml-auto">

                <div class="card-body text-secondary">

                  <form class="form-header" action="{{ route('admin_guard_contact_path') }}" method="GET">
                    @csrf
                    <input class="au-input au-input--xl" type="text" value="{{ $recherche??'' }}" name="recherche" placeholder="Rechercher...">
                      <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                      </button>
                  </form>

                </div>

            </div>
        </div>
        </div>
      </section>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th><i class="calendar icon"></i>Date</th>
                        <th><i class="mail icon"></i>Email</th>
                        <th><i class="user icon"></i>Nom</th>
                        <th><i class="chat icon"></i>Sujet</th>

                    </tr>
                </thead>
                <tbody>
                  @forelse ($messages as $message)

                    <tr>

                      <td><a href="{{route('admin_show_guard_contact_path',$message->id)}}" style="color:inherit">{{$message->created_at->format('j M Y')}}</a></td>
                      <td><a href="{{route('admin_show_guard_contact_path',$message->id)}}" style="color:inherit">{{$message->email}}</a></td>
                      <td><a href="{{route('admin_show_guard_contact_path',$message->id)}}" style="color:inherit">{{$message->name}}</a></td>
                      <td><a href="{{route('admin_show_guard_contact_path',$message->id)}}" style="color:inherit">{{$message->subject}}</a></td>



                    </tr>
                  @empty
                    <div class="col col-lg-12">
                      <section class="card">
                        <div class="card-body text-secondary text-center">
                          <i class="info icon"></i> Aucun enregistrement trouvé
                        </div>
                      </section>
                    </div>
                  @endforelse

                </tbody>
            </table>

        </div>
        @if(!isset($recherche))
        <div class="row">
          <div class="col-md-6 offset-md-3 mr-auto ml-auto">
            {{-- <section class="card"> --}}
            <div class="card-body text-secondary">
                <div class="d-flex justify-content-center">
                  {{ $messages->links() }}

                </div>
              </div>
            {{-- </section> --}}
          </div>
        </div>
        @endif()
    </div>

</div>







@stop
