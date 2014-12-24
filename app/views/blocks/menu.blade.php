@if($pages->count())
  <ul class="nav navbar-nav navbar-right">
  @foreach ($pages as $page)
    <li><a href="{{ URL::to($page->alias) }}">{{ $page->title }}</a></li>
  @endforeach
  </ul>
@endif