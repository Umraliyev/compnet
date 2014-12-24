@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <!-- Content -->
  <div class="page-services">
    <div class="container">
      <br><h2 class="text-center text-uppercase">Портфолио</h2>
      <ul class="nav nav-pills">
        <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-html5 fa-2x"></i> Сайты</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
    @if ($projects->count())
      @foreach ($projects as $project)
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail">
          <img src="{{ asset('img/projects/'.$project->image) }}" class="img-responsive" alt="{{ $project->description }}">
          <div class="caption">
            <h4>{{ $project->title }}</h4>
            <p>{{ $project->description }}</p>
            <p><a href="http://{{ $project->link }}/" target="_blank" rel="tooltip" title="Zoom">www.{{ $project->link }}</a></p>
          </div>
        </div>
      </div>
      @endforeach
    @else
      <div class="col-md-12">
        <p>Проектов нет</p>
      </div>
    @endif
    </div>

    <div class="row">
      <div class="col-md-12">
        <br><br>
        {{ $page->text }}
        <br><br>
      </div>
    </div>
  </div>
@stop
