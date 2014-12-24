@extends('admin.layouts.default')

@section('title', 'Страницы')
@section('fa-title', 'fa-files-o')

@section('content')
<div class="col-md-12">
  @if (Session::has('global'))
  <div class="alert alert-dismissable alert-success">{{ Session::get('global') }}</div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr class="info">
          <th>Алиас</th>
          <th>Название</th>
          <th align="center">Функции</th>
        </tr>
      </thead>
      <tbody>
      @if ($pages->count())
        @foreach ($pages as $page)
        <tr>
          <td>{{ $page->alias }}</td>
          <td><a href="{{ URL::route('admin.pages.edit', $page->id) }}">{{ $page->title }}</a></td>
          <td>
            <a class="label label-primary" href="{{ URL::to($page->alias) }}" title="Просмотр страницы" target="_blank"><span class="fa fa-file"></span></a>
            <a class="label label-primary" href="{{ URL::route('admin.pages.edit', $page->id) }}" title="Редактировать"><span class="fa fa-edit"></span></a>
          </td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>
</div>
@stop