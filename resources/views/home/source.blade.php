@extends('templates/home')


@section('content')



  <div class="form" style="margin:4% auto">
    <h2 style="text-align:center">Code source de l'application <i class="ui smile icon"></i>.</h2>
    <hr>
    <br>
    <!-- <div class="">
      <p class="ui primary button">Télecharger directe</p>
      <p class="ui grey button">télécharger via github</p>
      <p class="ui violet button">via heroku</p>
      <p class="ui violet button">via heroku</p>
    </div> -->

    <div class="">
      <div class="ui three column doubling stackable grid container">




          <div class="column">
                  <div class="ui special cards">

                          <div class="card">
                              <div class="ui small content">
                                  <div class="right floated meta"></div>

                                  </div>

                            <div class="blurring dimmable image">
                              <div class="ui dimmer">
                                <div class="content">
                                  <div class="center">
                                    <a href="" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                                  </div>
                                </div>
                              </div>
                              <img class="ui image" style="height:200px;"  src="/storage/books/image/default.jpg">

                            </div>
                            <div class="content text-center">
                              <a href="" class="header">Direct <i class="ui download icon"></i></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a class="ui primary button">Télechargement direct</a>
                              </span>
                              <div>


                              </div>
                              </div>
                              </div>
                  </div>
          </div>

          <div class="column">
                  <div class="ui special cards">

                          <div class="card">
                              <div class="ui small content">
                                  <div class="right floated meta"></div>

                                  </div>

                            <div class="blurring dimmable image">
                              <div class="ui dimmer">
                                <div class="content">
                                  <div class="center">
                                    <a href="" class="ui inverted button"><i class="ui eye icon"></i> Regarder</a>
                                  </div>
                                </div>
                              </div>
                              <img class="ui image" style="height:200px;"  src="/storage/books/image/default.jpg">

                            </div>
                            <div class="content text-center">
                              <a href="" class="header">Github <i class="ui github icon"></i></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a class="ui grey button">télécharger via github</a>

                              </span>
                              <div>


                              </div>
                              </div>
                              </div>
                  </div>
          </div>

          <div class="column">
                  <div class="ui special cards">

                          <div class="card">
                              <div class="ui small content">
                                  <div class="right floated meta"></div>

                                  </div>

                            <div class="blurring dimmable image">
                              <div class="ui dimmer">
                                <div class="content">
                                </div>
                              </div>
                              <img class="ui image" style="height:200px;"  src="/storage/books/image/default.jpg">

                            </div>
                            <div class="content text-center">
                              <a href="" class="header">Heroku <span><b>h</b></span></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a class="ui violet button">Visualiser sur heroku</a>

                              </span>
                              <div>


                              </div>
                              </div>
                              </div>
                  </div>
          </div>

      </div>
      <hr>
    </div>

  </div>









@endsection
