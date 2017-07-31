<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Premier League 2017</title>
  <link href="css/app.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="js/config.js"></script>
</head>
</head>
<body>
    <header>@include('dashboard.layout.header')</header>
    <div class="row remove-margin-right container-dashboard">
      <div class="col-md-2 container-sidebar">@include('dashboard.layout.left_side')</div>
      <div class="col-md-10">@yield('content')</div>
    </div>
</body>
</html>