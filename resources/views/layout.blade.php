<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumille Framework</title>

    <link rel="stylesheet" href="@asset('css/app.css')">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
<script type="text/javascript" src="@asset('js/app.js')"></script>
</body>
</html>