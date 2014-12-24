@extends('admin.layouts.default')

@section('title', 'Инфо-Блоки - ' . strip_tags($info->title) . ' - Редактирование')
@section('fa-title', 'fa-info-circle')

@section('content')
<div class="col-md-12">
  @if ($errors->count())
    @foreach ($errors->all() as $error)
      <div class="alert alert-dismissable alert-danger">{{ $error }}</div>
    @endforeach
  @endif
  <form action="{{ URL::route('admin.info.update', $info->id) }}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ Form::token() }}
    <table class="table table-striped table-hover">
      <tr>
        <td><i class="{{ $info->image }}"></i></td>
        <td><input type="text" class="form-control" name="image" value="{{ e($info->image) }}"></td>
      </tr>
      <tr>
        <td><b>Название</b></td>
        <td><input type="text" class="form-control" name="title" value="{{ $info->title }}"></td>
      </tr>
      <tr>
        <td><b>Alias</b></td>
        <td><input type="text" class="form-control" name="url" value="{{ $info->url }}"></td>
      </tr>
      <tr>
        <td><b>Текст</b></td>
        <td><textarea cols="75" rows="10" class="form-control" name="text">{{ (Input::old('text')) ? Input::old('text') : $info->text }}</textarea></td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Сохранить</button>
    <button type="reset" class="btn btn-primary"><span class="fa fa-undo"></span> Сбросить</button>
    <a href="{{ URL::route('admin.info.index') }}" class="btn btn-primary"><span class="fa fa-arrow-circle-left"></span> Назад</a>
  </form>
</div>
@stop