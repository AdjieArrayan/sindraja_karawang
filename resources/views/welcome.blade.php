<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{asset('style/assets/css/landing-style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main">
        @yield('header')

    </div>
</body>
</html>
