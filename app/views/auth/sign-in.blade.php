<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-yeti.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <br>

    <div class="container">
      <div class="row">
        @if (Session::has('global'))
        <div class="alert alert-dismissable alert-danger">{{ Session::get('global') }}</div>
        @endif

        @if ($errors->has('email'))
        <div class="alert alert-dismissable alert-danger">{{ $errors->first('email') }}</div>
        @endif
        @if ($errors->has('password'))
        <div class="alert alert-dismissable alert-danger">{{ $errors->first('password') }}</div>
        @endif
        <div class="col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Пожалуйста, Войдите в систему</h3>
            </div>
            <div class="panel-body">
              <form action="{{ URL::route('post-sign-in') }}" method="post" role="form">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Email" name="email" type="text" autofocus=""{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '" ' : '' }}>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Пароль" name="password" type="password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" value="Remember Me">Запомнить меня
                    </label>
                  </div>
                  {{ Form::token() }}
                  <input class="btn btn-lg btn-success btn-block" type="submit" name="sing-in" value="Войти">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>