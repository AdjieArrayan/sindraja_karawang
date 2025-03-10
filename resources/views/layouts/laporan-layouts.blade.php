<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('style/assets/css/form-laporan.css') }}" />
  </head>
  <body>
    <div class="container">
      <header class="header">
        @yield('Header')
        <img src="{{asset('style/assets/image/hero_img/hero_logo.png') }}" alt="SIDRAJA 1" class="logo"/>
        <h1 class="title">Entri Laporan Trantibum</h1>
      </header>

        @yield('content')

      </main>
    </div>
