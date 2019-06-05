@extends('administration/layout/master')



@section('content')
  <div class="row">
    <div class="col col-lg-12">
      <section class="card">
        <div class="card-body text-secondary">
          <form action="{{ route('admin_books_path') }}" method="get">
            @csrf
          <div class="row form-group mt-3">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label"><i class="filter icon"></i> Filtre</label>
            </div>
            <div class="col col-md-4">
                <select name="category" id="category" class="form-control">
                  <option value="null" >Selectionner un catégorie</option>
                  @foreach($categories as $category)
                    <option
                    @if (isset($cat))
                      @if ($cat->name == $category->name)
                        selected
                      @endif
                    @endif


                     value="{{ $category->slug }}">{{$category->name}}</option>
                  @endforeach
                </select>
            </div>
            <div class="col col-md-5">
                <button type="submit" class="btn btn-primary btn-md">
                  <i class="fa fa-filter"></i> Filtrer
                </button>
                <a href="{{ route('admin_books_path') }}" class="btn btn-danger btn-md">
                  <i class="fa fa-trash"></i> Effacer filtre
                </a>

            </div>
          </form>
        </div>
        <hr>
        <div class="row">
          <div class="col col-md-3">
              <label for="select" class=" form-control-label"><i class="search icon"></i> Chercher</label>
          </div>
          <div class="col-12 col-md-9">
            <form class="form-header" action="" method="get">
                @csrf
                <input class="au-input au-input--xl" type="text" name="recherche" value="{{ $recherche??'' }}" placeholder="Rechercher livres...">
                <button class="au-btn--submit" type="submit">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </form>
          </div>
        </div>
        </div>
      </section>
    </div>
  </div>

<div class="row">
  @forelse($livres as $livre)


  <div class="col-md-4">
      <div class="card">
          <img class="card-img-top"
          style="height:250px;"
          src="/storage/{{isset($livre->image)?$livre->image:'books/image/default.jpg'}}"
          alt="{{$livre->title}}">
          <div class="card-body">
              <h4 class="card-title mb-3 text-center">{{$livre->title}}</h4>
              <hr>
              <p class="text-center">{{$livre->category->name}}</p>
              <hr>
              <div class="card-text text-center">
                  <span>
                      <i class="comment icon"></i>
                      {{$livre->commentaries()->count()}}
                  </span>
                  <span>|</span>
                  <span>
                      <i class="download icon"></i>
                      {{ $livre->downloaded->downloads }}
                  </span>
              </div>
          </div>
      </div>
  </div>
@empty
  {{-- <div class="row"> --}}
    <div class="col col-lg-12">
      <section class="card">
        <div class="card-body text-secondary text-center">
          <i class="info icon"></i> Aucun enregistrement trouvé
        </div>
      </section>
    </div>
  {{-- </div> --}}
@endforelse
</div>


<div class="row">
  <div class="col-md-6 offset-md-3 mr-auto ml-auto">

      @if (!isset($recherche))

        <div class="card-body text-secondary">{{$livres->links()}}</div>

      @endif

  </div>
</div>





@stop
