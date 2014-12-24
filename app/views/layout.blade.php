<!-- 
   ______                      ____         __
  / ____/___  ____ ___  ____  / __ \___  __/ /_
 / /   / __ \/ __ `__ \/ __ \/ / / / _ \/_   _/
/ /___/ /_/ / / / / / / /_/ / / / /  __/ / /_
\____/\____/_/ /_/ /_/ .___/_/ /_/\___/ /___/
                    /_/
-->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="author" content="compnet.kz">
    <meta name="description" content="@yield('meta_description')">

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-yeti.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CompNet</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-flag"></span> <strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li><a href="?lang=ru">Русский</a></li>
                <li><a href="?lang=kz">Қазақша</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('index') }}">Главная</a></li>
            <li><a href="{{ URL::to('portfolio') }}">Портфолио</a></li>
            <li><a href="{{ URL::to('services/it-outsourcing') }}">Услуги</a></li>
            <li><a href="{{ URL::to('compnet') }}">О КомпНэт</a></li>
            <li><a href="{{ URL::to('partners') }}">Партнеры</a></li>
            <li><a href="{{ URL::to('contacts') }}">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="top-space"></div>

    <!-- Content -->
    @yield('content')

    <footer class="bg-dark">
      <div class="container">
        <div class="col-md-12">
          <h5>Copyright (C) 2011 - 2014 CompNet Technologies. Almaty, Kazakhstan.</h5>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>