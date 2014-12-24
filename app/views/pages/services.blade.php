@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <div class="page-services">
    <div class="container">
      <br>
      <h2 class="text-center  text-uppercase">Услуги</h2>
      <h4><i class="fa fa-calculator"></i> <a href="#">Калькулятор</a></h4>
      <div class="row">
        <ul class="nav nav-pills">
          <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/it-outsourcing')) {{ 'active' }} @endif"><a href="#it-outsourcing" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-keyboard-o fa-5x"></i><br>IT Аутсорсинг</a></li>
          <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/site-development')) {{ 'active' }} @endif"><a href="#site-development" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-html5 fa-5x"></i><br>Создание Сайтов</a></li>
          <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/seo-smm')) {{ 'active' }} @endif"><a href="#seo-smm" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-line-chart fa-5x"></i><br>SEO &amp; SMM</a></li>
          <li class="col-md-3 col-sm-3 col-xs-6 @if (Request::is('services/training-center')) {{ 'active' }} @endif"><a href="#training-center" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-mortar-board fa-5x"></i><br>Учебный Центр</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row" id="info">
      {{ $info }}
    </div>
    <div class="row">
      {{ $page->text }}
    </div>
  </div>
@stop

@section('scripts')
  <script src="{{ asset('/js/ajax.js') }}"></script>
@stop