@extends('pages/admin/template/default')


@section('title',"Catégories")
@section('description',"liste des catégories")

@section('heading',"liste des catégories")


@section('content')
<div class="d-flex justify-content-end mb-3">
  <a href="{{ route('add_category_path') }}" class="ui green button"><i class="ui add icon"></i>Ajout</a>
    <div class="ui floating dropdown violet labeled icon button">
        <i class="filter icon"></i>
        <span class="text">Filtrer </span>
        <div class="menu">
            <div class="ui icon search input">
            <i class="search icon"></i>
            <input type="text" placeholder="Search tags...">
            </div>
            <div class="divider"></div>
            <div class="header">
            <i class="tags icon"></i>
            Couleurs
            </div>
            <div class="scrolling menu">
            <div class="item">
                <div class="ui red empty circular label"></div>
                Rouge
            </div>
            <div class="item">
                <div class="ui green empty circular label"></div>
                Verte
            </div>
            <div class="item">
                <div class="ui violet empty circular label"></div>
                Violet
            </div>
            <div class="item">
                <div class="ui purple empty circular label"></div>
                News
            </div>
            <div class="item">
                <div class="ui orange empty circular label"></div>
                Enhancement
            </div>
            <div class="item">
                <div class="ui empty circular label"></div>
                Change Declined
            </div>
            <div class="item">
                <div class="ui yellow empty circular label"></div>
                Off Topic
            </div>
            <div class="item">
                <div class="ui pink empty circular label"></div>
                Interesting
            </div>
            <div class="item">
                <div class="ui green empty circular label"></div>
                Discussion
            </div>
            </div>
        </div>
    </div>
</div>
<div class="ui two column grid">

@forelse ($categories as $category)


    <div class="column">
        <div class="ui raised segment">
        <a href="{{ route('edit_category_path',$category->slug) }}" class="ui {{$category->color}} ribbon label">{{$category->name}}</a>

        <p class="text-justify">
            {{$category->description}}

        </p>

        </div>
    </div>
@empty
  <div class="ui icon message mt-5" >
      <i class="info icon"></i>
      <div class="content">
          <div class="header">
              Auncun enregistrement
          <p>Désolé, il n'y pas de catégories en ce moment.</p>
          </div>
      </div>
  </div>

@endforelse

</div>
<hr>

<div class="d-flex justify-content-center mt-4">

  {{$categories->links()}}
</div>





@stop

@section('script')

<script>
    $('.ui.dropdown')
  .dropdown()
;
</script>
@endsection
