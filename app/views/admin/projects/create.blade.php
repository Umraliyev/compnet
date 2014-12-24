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
    <form action="{{ URL::route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
      {{ Form::token() }}
      <table class="table table-striped table-hover">
        <tbody>
          <tr>
            <td><b>Картинка</b></td>
            <td><input type="file" name="image"></td>
          </tr>
          <tr>
            <th>Название</th>
            <td><input type="text" class="form-control input-sm" name="title" maxlength="100"{{ (Input::old('title')) ? ' value="' . e(Input::old('title')) . '"' : '' }}></td>
          </tr>
          <tr>
            <th>Ссылка</th>
            <td><input type="text" class="form-control input-sm" name="link" maxlength="50"{{ (Input::old('link')) ? ' value="' . e(Input::old('link')) . '"' : '' }}></td>
          </tr>
          <tr>
            <th>Описание</th>
            <td colspan="4"><textarea cols="75" rows="10" class="form-control" name="description">{{ (Input::old('text')) ? e(Input::old('text')) : '' }}</textarea></td>
          </tr>
        </tbody>
      </table>
      <button type="submit" name="btn-add-tour" class="btn btn-primary"><span class="fa fa-plus"></span> Добавить</button>
      <a href="{{ URL::route('admin.projects.index') }}" class="btn btn-primary"><span class="fa fa-arrow-circle-left"></span> Назад</a>
    </form>
  </div>
</div>
@stop