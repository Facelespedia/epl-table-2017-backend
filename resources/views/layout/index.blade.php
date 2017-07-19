<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Premier League 2017-18</title>
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/header.scss" type="text/css">
</head>
<body>
    <header>@include('layout.header')</header>
    <div class="container">@yield('content')</div>
    <footer>@include('layout.footer')</footer>
</body>
</html>
