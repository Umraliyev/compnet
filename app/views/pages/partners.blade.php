@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <!-- Content -->
  <div class="">
    <div class="container">
      <br><h2 class="text-center text-uppercase">Партнеры</h2><br>
      {{ $page->text }}
    </div>
  </div>
@stop
