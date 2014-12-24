<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-yeti.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote.css') }}">

    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <!-- Panel -->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('admin.pages.index') }}">CompNet</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="{{ (Request::is('admin/pages')) ? 'active' : '' }}"><a href="{{ URL::route('admin.pages.index') }}"><i class="fa fa-files-o"></i> Страницы</a></li>
            <li class="{{ (Request::is('admin/info')) ? 'active' : '' }}"><a href="{{ URL::route('admin.info.index') }}"><i class="fa fa-info-circle"></i> Инфо-Блоки</a></li>
            <li class="{{ (Request::is('admin/projects')) ? 'active' : '' }}"><a href="{{ URL::route('admin.projects.index') }}"><i class="fa fa-cubes"></i> Портфолио</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li><a href="#"><i class="fa fa-user"></i> Администратор</a></li>
            <li><a href="{{ URL::route('sign-out') }}"><i class="fa fa-sign-out"></i> Выйти</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </nav>

      <div class="page-wrapper">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa @yield('fa-title')"></i> @yield('title') <small>Администрация</small></h1>
          </div>
          <div class="col-md-2">
            <h1></h1>
            @yield('button')
          </div>
        </div>

        <div class="row">
          @yield('content')
        </div>

      </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/summernote.min.js') }}"></script>
  </body>
</html>