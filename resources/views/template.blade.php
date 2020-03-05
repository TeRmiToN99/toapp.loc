<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDBootstrap v5</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{assets('css/bootstrap.min.css')}}">

    <!-- Material Design for Bootstrap -->
    <link rel="stylesheet" href="{{assets('css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{assets('css/custom.css')}}">
</head>
<body>
<div class="uk-container">
    <nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
        @include('layouts/menu')
    </nav>
    <div> @yield('content')</div>
    <div>Подвал</div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
