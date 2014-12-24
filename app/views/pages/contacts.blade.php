@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <!--Contacts-->
  <div class="">
    <div class="container">
      <br><h2 class="text-center text-uppercase">Контакты</h2><br>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/maps?ie=UTF8&amp;ll=43.266925,76.940904&amp;spn=0.004883,0.009871&amp;t=m&amp;z=17&amp;output=embed"></iframe>
      </div>
      <br>

      <h3 class="text-center text-uppercase">Связаться с менеджером</h3>
      <div class="col-md-4">
        <h2 class="text-center"><i class="fa fa-map-marker fa-2x"></i></h2>
        <p class="text-center">г. Алматы, Ул. Абылай хана, дом № 34, офис 300 (уг. ул.Маметовой)</p>
        <br>
      </div>
      <div class="col-md-4">
        <h2 class="text-center"><i class="fa fa-mobile fa-2x"></i></h2>
        <p class="text-center">+7 (727) 279 71 73</p>
        <p class="text-center">+7 (727) 317 94 79</p>
      </div>
      <div class="col-md-4">
        <h2 class="text-center"><i class="fa fa-envelope-o fa-2x"></i></h2>
        <p class="text-center">sale@compnet.kz</p>
        <p class="text-center">info@compnet.kz</p>
      </div>
    </div>
  </div>

  {{ Form::open(array('url' => 'foo/bar')) }}
    <div class="container">
      <br>
      <h3 class="text-center text-uppercase"><i class="fa fa-send"></i> Отправить заявку</h3><br>
      <div class="col-md-3 form-group">
        <label for="exampleInputEmail1">Имя</label>
        <input type="text" class="form-control" id="exampleInputEmail1" maxlength="40">
      </div>
      <div class="col-md-3 form-group">
        <label for="exampleInputName">Email адрес</label>
        <input type="email" class="form-control" id="exampleInputName" maxlength="50">
      </div>
      <div class="col-md-3 form-group">
        <label for="exampleInputPhone">Номер телефона</label>
        <input type="tel" class="form-control" id="exampleInputPhone" maxlength="20">
      </div>
      <div class="col-md-3 form-group">
        <label>Выберите услугу</label>
        <select class="form-control select-services" id="select">
          <option>IT аутсорсинг</option>
          <option>Создание сайта</option>
          <option>Видеонаблюдение</option>
          <option>1C:Предприятие</option>
        </select>
      </div>
      <div class="col-md-12 form-group">
        <label for="text4">Сообщение</label>
        <textarea class="form-control" rows="6" id="text4"></textarea>
      </div>
      <div class="col-md-12 form-group text-right">
        <button type="submit" class="btn btn-primary">Отправить</button>
      </div>
    </div>
  {{ Form::close() }}
@stop