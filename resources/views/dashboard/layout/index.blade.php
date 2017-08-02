<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Premier League 2017</title>
  <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet" type="text/css">
  <script src="{!! asset('js/jquery.min.js') !!}"></script>
  <script src="{!! asset('js/config.js') !!}"></script> 
  <script src="{!! asset('js/typeahead.js') !!}"></script> 
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