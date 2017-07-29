<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Premier League 2017-18</title>
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/config.js"></script>
</head>
<body>
    <header>@include('layout.header')</header>
    <div class="container">@yield('content')</div>
    <footer>@include('layout.footer')</footer>
</body>
</html>
