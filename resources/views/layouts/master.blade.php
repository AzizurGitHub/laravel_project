<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL('css/bootstrap-theme.min.css')}}">
    @yield('projectcss')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
<script src="{{URL('js/jquery.js')}}"></script>
<script src="{{URL('js/bootstrap.min.js')}}"></script>
@yield('projectjs')
</body>
</html>