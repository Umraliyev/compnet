@extends('layout')

@section('title', $page->title.' - '.$page->title_d)

@section('meta_description', $page->meta_d)

@section('content')
  <!-- Content -->
  <div class="page-services">
    <div class="container">
      <br><h2 class="text-center text-uppercase">Услуги</h2><br>
      <ul class="nav nav-pills">
        <li class="col-md-3 col-sm-3 col-xs-6 {{ (Request::is('services/it-outsourcing') ? 'active' : null) }}"><a href="{{ URL::to('services/it-outsourcing') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-keyboard-o fa-5x"></i><br><b>IT</b> Аутсорсинг</a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 {{ (Request::is('services/site-development') ? 'active' : null) }}"><a href="{{ URL::to('services/site-development') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-html5 fa-5x"></i><br>Создание Сайтов</a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 <?php echo ($service == 'seo-smm') ? 'active' : null; ?>"><a href="{{ URL::to('services/seo-smm') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-line-chart fa-5x"></i><br><b>SEO</b> &amp; <b>SMM</b></a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 <?php echo ($service == 'training-center') ? 'active' : null; ?>"><a href="{{ URL::to('services/training-center') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-mortar-board fa-5x"></i><br>Учебный Центр</a></li>
      </ul><br>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade <?php echo ($service == 'it-outsourcing') ? 'active in' : null; ?>" id="it-outsourcing">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'site-development') ? 'active in' : null; ?>" id="site-development">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'seo-smm') ? 'active in' : null; ?>" id="seo-smm">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'training-center') ? 'active in' : null; ?>" id="training-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
          </div>
        </div>
        <div class="tab-pane fade" id="calculator">
          <div class="row">
            
          </div>
        </div>
      </div>
      {{ $page->text }}

    </div>
  </div>
@stop
