@extends('templates.default')


@section('title',"Livres")
@section('description',"liste des livres")

@section('heading',"liste des livres")


@section('content')
<div class="d-flex justify-content-end mb-3">
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
    @for ($i = 0; $i < 40; $i++)

    <div class="column">
        <div class="ui raised segment">
        <a class="ui red ribbon label">Overview</a>
        <span>Account Details</span>
        <p class="text-justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda, at vitae incidunt et iure reiciendis sequi maiores explicabo expedita perspiciatis saepe quae neque dignissimos ullam quasi harum nihil dolor magnam amet, veritatis distinctio ab quod. Est ipsam autem aliquid laboriosam?
        </p>

        </div>
    </div>
    @endfor

</div>





@stop

@section('script')

<script>
    $('.ui.dropdown')
  .dropdown()
;
</script>
@endsection
