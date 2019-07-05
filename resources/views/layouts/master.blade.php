<!DOCTYPE html>
@yield('pre')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{isset($title)? $title:config('app.name')}}</title>
  <link rel="stylesheet" href="{{asset('/css/core.css')}}">
  <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('/css/web.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
</head>
<body>
  @include('layouts.nav')
  @yield('content')
  <div id="preloader"></div>
  <script src="{{asset('/js/core.js')}}"></script>
  <script src="{{asset('/js/main.js')}}"></script>
</body>
</html>
