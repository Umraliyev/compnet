@extends('admin.layouts.default')

@section('title', 'Страница - ' . $page->title . ' - Редактирование')
@section('fa-title', 'fa-files-o')

@section('content')
<div class="col-md-12">
  @if ($errors->count())
    @foreach ($errors->all() as $error)
      <div class="alert alert-dismissable alert-danger">{{ $error }}</div>
    @endforeach
  @endif
  <form action="{{ URL::route('admin.pages.update', $page->id) }}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ Form::token() }}
    <table class="table table-striped table-hover">
      <tr>
        <td><b>Название</b></td>
        <td><input type="text" class="form-control" value="{{ $page->title }}" disabled></td>
      </tr>
      <tr>
        <td><b>Alias</b></td>
        <td><input type="text" class="form-control" value="{{ $page->alias }}" disabled></td>
      </tr>
      <tr>
        <td><b>Мета название</b></td>
        <td><input type="text" class="form-control" name="meta_title" value="{{ $page->meta_title }}"></td>
      </tr>
      <tr>
        <td><b>Мета описание</b></td>
        <td><input type="text" class="form-control" name="meta_description" value="{{ $page->meta_description }}"></td>
      </tr>
      <tr>
        <td><b>Текст</b></td>
        <td><textarea cols="75" rows="10" class="form-control summernote" id="summernote" name="text">{{ (Input::old('text')) ? Input::old('text') : $page->text }}</textarea></td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Сохранить</button>
    <button type="reset" class="btn btn-primary"><span class="fa fa-undo"></span> Сбросить</button>
    <a href="{{ URL::route('admin.pages.index') }}" class="btn btn-primary"><span class="fa fa-arrow-circle-left"></span> Назад</a>
  </form>
</div>
<script>
  $(document).ready(function(){
    $('#summernote').summernote({
      height: 250,      // set editor height
      minHeight: null,  // set minimum height of editor
      maxHeight: null,  // set maximum height of editor
      focus: true,      // set focus to editable area after initializing summernote
    });
  });
</script>
@stop