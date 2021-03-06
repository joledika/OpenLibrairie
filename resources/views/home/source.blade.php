@extends('templates/home')


@section('content')



  <div class="form" style="margin:4% auto">
    <h2 style="text-align:center">Code source de l'application <i class="ui smile icon"></i>.</h2>
    <hr>
    <br>


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
                              <img class="ui image" style="height:200px;"  src="/storage/source/direct.png">

                            </div>
                            <div class="content text-center">
                              <a href="/storage/source/code.tar.gz" target="_blank" class="header">Direct <i class="ui download icon"></i></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a href="/storage/source/code.tar.gz" target="_blank" class="ui primary button">Télechargement direct</a>
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
                              <img class="ui image" style="height:200px;"  src="/storage/source/github.jpg">

                            </div>
                            <div class="content text-center">
                              <a href="https://github.com/joledika/OpenLibrairie" target="_blank" class="header">Github <i class="ui github icon"></i></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a href="https://github.com/joledika/OpenLibrairie" target="_blank" class="ui grey button">télécharger via github</a>

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
                              <img class="ui image" style="height:200px;"  src="/storage/source/heroku.jpg">

                            </div>
                            <div class="content text-center">
                              <a href="http://openlibrairies.herokuapp.com" target="_blank" class="header">Heroku <span><b>h</b></span></a>

                            </div>


                            <div class="meta ml-3">


                              </div>

                              <div class="content">
                              <span class="right floated">
                                <a href="http://openlibrairies.herokuapp.com" target="_blank" class="ui violet button">Visualiser sur heroku</a>

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
