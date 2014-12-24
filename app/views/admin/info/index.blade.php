@extends('admin.layouts.default')

@section('title', 'Инфо-Блоки')
@section('fa-title', 'fa-info-circle')

@section('content')
<div class="col-md-12">
  @if (Session::has('global'))
  <div class="alert alert-dismissable alert-success">{{ Session::get('global') }}</div>
  @endif
  <div class="table-responsive">
    <table class="table table-striped table-hover">
      <thead>
        <tr class="info">
          <th>Картинка</th>
          <th>Алиас</th>
          <th>Название</th>
          <th align="center">Функции</th>
        </tr>
      </thead>
      <tbody>
      @if ($info->count())
        @foreach ($info as $item)
        <tr>
          <td><i class="{{ $item->image }}"></i></td>
          <td>{{ $item->url }}</td>
          <td><a href="{{ URL::route('admin.info.edit', $item->id) }}">{{ $item->title }}</a></td>
          <td>
            <a class="label label-primary" href="{{ URL::to($item->alias) }}" title="Просмотр страницы" target="_blank"><span class="fa fa-file"></span></a>
            <a class="label label-primary" href="{{ URL::route('admin.info.edit', $item->id) }}" title="Редактировать"><span class="fa fa-edit"></span></a>
          </td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>
</div>
@stop