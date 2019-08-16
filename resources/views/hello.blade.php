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
<div class="d-flex justify-content-center align-items-center align-content-center vh-100">
    <div class="text-center">
        <h3>Welcome to <span class="text-danger">Lumille Framework</span>.</h3>
        <p>Is a minimalistic framework</p>
    </div>
</div>

<scrip type="text/javascript" src="@asset('js/app.js')"></scrip>
</body>
</html>