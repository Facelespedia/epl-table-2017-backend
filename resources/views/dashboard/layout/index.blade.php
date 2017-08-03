<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Premier League 2017</title>
  <link href="/css/app.css" rel="stylesheet" type="text/css">
  <script src="{!! asset('js/jquery.min.js',array(),true) !!}"></script>
  <script src="{!! asset('js/config.js',array(),true) !!}"></script> 
  <script src="{!! asset('js/typeahead.js',array(),true) !!}"></script> 
</head>
</head>
<body>
    <header>@include('dashboard.layout.header')</header>
    <div class="row no-margin container-dashboard">
      <div class="col-md-2 no-padding container-sidebar">@include('dashboard.layout.left_side')</div>
      <div class="col-md-10">@yield('content')</div>
    </div>
    <script src="{!! asset('js/admin.js') !!}"></script>
</body>
</html>