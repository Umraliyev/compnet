@extends('admin.layouts.default')

@section('title', 'Портфолио - Добавление')
@section('fa-title', 'fa fa-cube')

@section('content')
<div class="col-md-12">
  @if ($errors->count())
    <div class="alert alert-dismissable alert-danger">
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
    </div>
  @endif
  <div class="table-responsive">
    <form action="{{ URL::route('admin.projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
      <input name="_method" type="hidden" value="PUT">
      {{ Form::token() }}
      <table class="table table-striped table-hover">
        <tbody>
          <tr>
            <td><img src="{{ asset('img/projects/'.$project->image) }}" width="150" height="112"></td>
            <td>
              <input type="hidden" name="imageName" value="{{ $project->image }}">
              <input type="file" name="image">
            </td>
          </tr>
          <tr>
            <th>Название</th>
            <td><input type="text" class="form-control input-sm" name="title" maxlength="100" value="{{ (Input::old('title')) ? Input::old('title') : $project->title }}"></td>
          </tr>
          <tr>
            <th>Ссылка</th>
            <td><input type="text" class="form-control input-sm" name="link" maxlength="50" value="{{ (Input::old('link')) ? Input::old('link') : $project->link }}"></td>
          </tr>
          <tr>
            <th>Описание</th>
            <td colspan="4"><textarea cols="75" rows="10" class="form-control" name="description">{{ (Input::old('description')) ? Input::old('description') : $project->description }}</textarea></td>
          </tr>
        </tbody>
      </table>
      <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Добавить</button>
      <a href="{{ URL::route('admin.projects.index') }}" class="btn btn-primary"><span class="fa fa-arrow-circle-left"></span> Назад</a>
    </form>
  </div>
</div>
@stop