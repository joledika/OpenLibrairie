@extends('administration/layout/master')



@section('content')
  <div class="row">
    <div class="col col-lg-12">
      <section class="card">
        <div class="card-body text-secondary">
          <div class="row form-group mt-3">
            <div class="col-md-6 offset-md-3 mr-auto ml-auto">

                <div class="card-body text-secondary">

                  <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports...">
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
                    <tr>
                        <td>2018-09-29 05:57</td>
                        <td>100398</td>
                        <td>iPhone X 64Gb Grey</td>
                        <td class="text-right">$999.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-28 01:22</td>
                        <td>100397</td>
                        <td>Samsung S8 Black</td>
                        <td class="text-right">$756.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-27 02:12</td>
                        <td>100396</td>
                        <td>Game Console Controller</td>
                        <td class="text-right">$22.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-26 23:06</td>
                        <td>100395</td>
                        <td>iPhone X 256Gb Black</td>
                        <td class="text-right">$1199.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-25 19:03</td>
                        <td>100393</td>
                        <td>USB 3.0 Cable</td>
                        <td class="text-right">$10.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-29 05:57</td>
                        <td>100392</td>
                        <td>Smartwatch 4.0 LTE Wifi</td>
                        <td class="text-right">$199.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-24 19:10</td>
                        <td>100391</td>
                        <td>Camera C430W 4k</td>
                        <td class="text-right">$699.00</td>

                    </tr>
                    <tr>
                        <td>2018-09-22 00:43</td>
                        <td>100393</td>
                        <td>USB 3.0 Cable</td>
                        <td class="text-right">$10.00</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>







@stop
