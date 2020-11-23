<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
      <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.min.css')}}">
  </head>

  <body>
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
{{--        @include('shared._messages')--}}
        @yield('content')
        @include('layouts._footer')
      </div>
    </div>

    <script src="{{URL::asset('/js/jquery-3.1.1.min.js')}}"></script>
  </body>
</html>
