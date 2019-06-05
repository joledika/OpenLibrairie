@extends('administration/layout/master')



@section('content')
  <div class="row">
    <div class="col col-lg-12">
      <section class="card">
        <div class="card-body text-secondary">
          <div class="row form-group mt-3">
            <div class="col col-md-3">
                <label for="select" class=" form-control-label"><i class="filter icon"></i> Filtre</label>
            </div>
            <div class="col-12 col-md-9">
                <select name="select" id="select" class="form-control">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                </select>
            </div>
        </div>
        </div>
      </section>
    </div>
  </div>

<div class="row">
  @for ($i=0; $i < 10; $i++)


  <div class="col-md-4">
      <div class="card">
          <img class="card-img-top" src="{{asset('home_page/img/intro/1.jpg')}}" alt="Card image cap">
          <div class="card-body">
              <h4 class="card-title mb-3 text-center">Card Image Title</h4>
              <hr>
              <div class="card-text text-center">
                  <span>
                      <i class="comment icon"></i>
                      20
                  </span>
                  <span>|</span>
                  <span>
                      <i class="download icon"></i>
                      20
                  </span>
              </div>
          </div>
      </div>
  </div>
  @endfor
</div>






@stop
