@extends('admin.layouts.default')

@section('title', 'Портфолио')
@section('fa-title', 'fa-cubes')
@section('button')
  <a href="{{ URL::route('admin.projects.create') }}" name="btn-add-tour" class="btn btn-success"><span class="fa fa-plus"></span> Добавить</a>
@stop

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
          <th>Название</th>
          <th>Ссылка</th>
          <th align="center">Функции</th>
        </tr>
      </thead>
      <tbody>
      @if ($projects->count())
        @foreach ($projects as $project)
        <tr>
          <td><img src="{{ asset('img/projects/'.$project->image) }}" width="100" height="75"></td>
          <td><a href="{{ URL::route('admin.projects.edit', $project->id) }}">{{ $project->title }}</a></td>
          <td>{{ $project->link }}</td>
          <td>
            <a class="label btn-sm label-primary" href="{{ URL::to($project->alias) }}" title="Просмотр страницы" target="_blank"><span class="fa fa-file"></span></a>
            <a class="label btn-sm label-primary" href="{{ URL::route('admin.projects.edit', $project->id) }}" title="Редактировать"><span class="fa fa-edit"></span></a>
            {{ Form::open(['method' => 'delete', 'class' => 'btn-delete', 'route' => ['admin.projects.destroy', $project->id]]) }}
              <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Удалить запись?')"><span class="fa fa-times"></span></button>
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      @endif
      </tbody>
    </table>
  </div>
</div>
@stop