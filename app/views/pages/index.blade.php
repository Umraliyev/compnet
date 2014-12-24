@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <!-- Slider -->
  <div class="slider">
    <div class="container">
      <!-- <div class="buzz_wrapper">
        <div class="text text-center text-uppercase">
          <span>CompNet... <i class="fa fa-cog fa-spin"></i> Сайт В разработке...</span>
        </div>
        <div class="scanline"></div>
      </div> -->
    </div>
  </div>

  <script>
    $(function(){
      for(i=0;i<4;i++){
        $('.buzz_wrapper .text span').eq(0).clone().prependTo('.buzz_wrapper .text');
      }
      for(i=0;i<10;i++){
        $('.buzz_wrapper .scanline').eq(0).clone().appendTo('.buzz_wrapper');
      }
    });
  </script>

  <!-- Services -->
  <div class="services">
    <div class="container">
      <div class="row">
      @foreach ($info_blocks as $info_block)
        <div class="col-md-3 col-sm-6 shadow">
          <br>
          <h2 class="text-center text-uppercase">{{ $info_block->title }}</h2>
          <h1 class="text-center"><i class="{{ $info_block->image }}"></i></h1>
          <p class="text-center">{{ $info_block->text }}</p>
          <p class="text-center"><a href="{{ URL::to('services/'.$info_block->url) }}" class="btn btn-outlined btn-more text-uppercase">Подробнее</a></p>
          <br>
        </div>
      @endforeach
      </div>
    </div>
  </div>

  <!-- Content -->

  <div class="bg-dark">
    <div class="container">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">IT Аутсорсинг</h1>
      <br>
      <div class="col-md-6">
        <br><br>
        <img src="{{ asset('/img/it/1.jpg') }}" class="img-responsive">
        <br>
      </div>
      <div class="col-md-6">
        <h3 class="">Контролируемые затраты на капитал.</h3>
        <p>Аутсорсинг освобождает капитал для инвестиций в ваш бизнес, и позволяет избежать больших затрат на ранних стадиях Вашего бизнеса.</p>

        <h3 class="">Снижение Накладных Расходов.</h3>
        <p>Накладные расходы, связанные с выполнением определенной бэк-офисных функций, чрезвычайно высоки. Рассмотрим аутсорсинг те функции, которые могут быть перемещены легко.</p>

        <h3 class="">Снижение трудозатрат.</h3>
        <p>Аутсорсинг поможет вам избежать больших затрат на найм и обучение персонала для краткосрочных или периферийных проектов.</p>

        <h3 class="">Квалифицированную Экспертизу.</h3>
        <p>Аутсорсинг предоставляет доступ к квалифицированной ресурсов, которые обеспечивают высокое качество поставляемых поскольку работа делается ими, кто делает это лучше всех.</p>

        <h3 class="">Фокус на ключевых Компетенциях.</h3>
        <p>Аутсорсинг освобождает компании от необходимости управлять непрофильных функций, и ставит фокус на ключевых компетенциях.</p>

        <!-- <h3>Повышает Производительность И Эффективность.</h3> -->
        <!-- <p>Внешним поставщикам структура затрат и экономии от масштаба производства повышает продуктивность и эффективность для Вашей фирмы и дать ему важное конкурентное преимущество.</p> -->

        <!-- <h3>Controlled capital costs.</h3> -->
        <!-- <p>Outsourcing releases capital for investment elsewhere in your business, and allows you to avoid large expenditures in the early stages of your business.</p> -->

        <!-- <h3>Reduced Overhead Costs.</h3> -->
        <!-- <p>Overhead costs of performing a particular back-office function are extremely high. Consider outsourcing those functions which can be moved easily.</p> -->

        <!-- <h3>Reduced labor costs.</h3> -->
        <!-- <p>Outsourcing helps you avoid the high cost of hiring and training staff for short-term or peripheral projects.</p> -->

        <!-- <h3>Skilled Expertise.</h3> -->
        <!-- <p>Outsourcing provides access to skilled resources which ensure high quality deliverable since the job is done by them who do it best.</p> -->

        <!-- <h3>Focus On core Competencies.</h3> -->
        <!-- <p>Outsourcing frees companies from having to manage non-core functions, and puts the focus back on their core competencies.</p> -->

        <!-- <h3>Increases Productivity & Efficiency.</h3> -->
        <!-- <p>An outside providers cost structure and economy of scale can increase productivity and efficiency for your firm and give it an important competitive advantage.</p> -->

        <!-- <h3>Operational Control.</h3> -->
        <!-- <p>Departments that may have evolved over tome into uncontrolled and poorly manged areas may benefit immensely from outsourcing.</p> -->
      </div>

      <div class="col-md-12">
        <br><br>
        <p class="text-center">
          <a href="#" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-search-plus"></i> Детально</a>
          <a href="#" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-calculator"></i> Расчитать</a>
          <a href="#" class="btn btn-outlined btn-light-coral text-uppercase"><i class="fa fa-shopping-cart"></i> Заказать</a>
        </p>
        <br>
      </div>
    </div>
    <br><br><br>
  </div>

  <div class="bg-dark">
    <br><br><br>
    <div class="container">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">Создание сайтов</h1>
      <br>

      <div class="col-md-6">
        <h2 class="text-center">Web-Разработка</h2>
        <p class="text-justify">Nulla facilis Aenean nectibulumante ipsum prin faucibus orci luctus et trices posuere cubilia Suspendse sollicit udin velit sed le pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna. Donec porta diam eu massa diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentunec in velit vel ipsum auctinar. Proin ullamcorp.</p>
        <p class="text-justify">Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit met consectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla vene natis. In pede mi aliquet sit amet</p>
      </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>

  <div class="bg-dark">
    <div class="container">
      <br><br>
      <h1 class="text-center text-uppercase">Учебный центр</h1>
      <br>
      <div class="col-md-6">

      </div>
      <div class="col-md-6">
        <h2 class="text-center">Системное администрирование</h2>
        <p class="text-justify">Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit met consectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet.</p>
        <p class="text-justify">Nulla vene natis. In pede mi aliquet sit amet euismod in auctor ut ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor lobortis quis lobortis dignissim pulvinar ac lorem. Vestibulum sed ante. Donec sagittis euismod pured ut perspiciatis unde omnis iste natus errouptatem accusa ntium doloremque laudantium tota.</p>
      </div>
      <div class="clearfix"></div>

      <div class="col-md-6">
        <h2 class="text-center">Web-Разработка</h2>
        <p class="text-justify">Nulla facilis Aenean nectibulumante ipsum prin faucibus orci luctus et trices posuere cubilia Suspendse sollicit udin velit sed le pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna. Donec porta diam eu massa diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentunec in velit vel ipsum auctinar. Proin ullamcorp.</p>
        <p class="text-justify">Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit met consectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla vene natis. In pede mi aliquet sit amet</p>
      </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <br><br><br>
      <h1 class="text-center">EVERYTHING IS POSSIBLE</h1>
      <br><br>
      <div class="col-md-3">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="">
                <p class="text-salmon">
                  <i class="fa fa-quote-left"></i>&nbsp;
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                  &nbsp;<i class="fa fa-quote-right"></i>
                </p>
              </div>
            </div>
            <div class="item">
              <div class="">
                <p class="text-salmon">
                  <i class="fa fa-quote-left"></i>&nbsp;
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  &nbsp;<i class="fa fa-quote-right"></i>
                </p><br>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <div class="text-right">
            <span data-target="#carousel-example-generic" data-slide="prev">
              <span class="fa fa-chevron-left" aria-hidden="true"></span>
            </span>
            <span data-target="#carousel-example-generic" data-slide="next">
              <span class="fa fa-chevron-right" aria-hidden="true"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h1 class="text-center text-light-coral">
          <i class="fa fa-heart fa-5x"></i>
        </h1>
      </div>
      <div class="col-md-3">
        <h1 class="text-center text-light-coral">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
          </span>
        </h1>
      </div>
      <div class="clearfix"></div>
      <br><hr><br>
      <div class="col-md-6">
        {{ $page->text }}
        <p>Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit met consectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet.</p>
        <p>Nulla vene natis. In pede mi aliquet sit amet euismod in auctor ut ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor lobortis quis lobortis dignissim pulvinar ac lorem. Vestibulum sed ante. Donec sagittis euismod pured ut perspiciatis unde omnis iste natus errouptatem accusa ntium doloremque laudantium tota.</p>
      </div>
      <div class="col-md-6">
        <p>Nulla facilis Aenean nectibulumante ipsum prin faucibus orci luctus et trices posuere cubilia Suspendse sollicit udin velit sed le pharetra aue nec augentum. Donec in velit vel ipsum auue. Nam elit magna. Donec porta diam eu massa diam lorem interdum vitaapibus ac scelerisque vitae pede. Donec eget tellus non erat lacinia fermentunec in velit vel ipsum auctinar. Proin ullamcorp.</p>
        <p>Bulum iaculis lacinia est. Proin dictum elemntum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit met consectetuer adipiscing elit. ellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla vene natis. In pede mi aliquet sit amet</p>
      </div>
    </div>
    <br><br>
  </div>

  <div class="how">
    <div class="container">
      <br><br>
      <h1 class="text-center text-uppercase"><i class="fa fa-cog fa-2x fa-spin"></i> Как мы работаем</h1>
      <br><br>
      <div class="col-md-2 col-sm-4 text-center">
        <i class="fa fa-check-circle fa-5x"></i><br>
        <h4 class=""><b>1</b><br> Получаем заявку</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 text-center">
        <i class="fa fa-comments fa-5x"></i><br>
        <h4 class=""><b>2</b><br> Консультация</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 text-center">
        <i class="fa fa-rocket fa-5x"></i><br>
        <h4 class=""><b>3</b><br> Исследование</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 text-center">
        <i class="fa fa-cogs fa-5x"></i><br>
        <h4 class=""><b>4</b><br> Выполняем работу</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 text-center">
        <i class="fa fa-money fa-5x"></i><br>
        <h4 class=""><b>5</b><br> Принимаем оплату</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 text-center text-success">
        <i class="fa fa-smile-o fa-5x"></i><br>
        <h4 class=""><b>6<br> Получаем довольного клиента</b></h4><br>
      </div>
    </div>
    <br>
  </div>

  <div class="">
    <div class="container">
      <br><br>
      <h1 class="text-center text-uppercase">Свяжитесь с нами</h1>
      <br>
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

@stop