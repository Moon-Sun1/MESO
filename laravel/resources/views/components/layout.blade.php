@props(['title' => 'نادي بلاد الرافدين'])

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('images/Al-Rafidain-logo.png') }}" type="image/png" sizes="32x32">

    {{-- Local fonts (optional; pass via <x-slot name="fonts">) --}}
    @isset($fonts)
      {{ $fonts }}
    @endisset

    {{-- Existing local CSS (keep order as in the original HTML) --}}
    <link id="bootstrap" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link id="mdb" rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/coloring.css') }}">
    <link id="colors" rel="stylesheet" href="{{ asset('css/colors/blue-teal.css') }}">

    @livewireStyles
    @vite(['resources/js/app.js'])
    {{ $head ?? '' }}
  </head>
  <header>
    @include('components.header')
  </header>
  <body class="dark-scheme">
    <div id="wrapper">
      {{ $slot }}
      {{ $afterContent ?? '' }}
    </div>
    <footer>
      @include('components.footer')
    </footer>

    {{-- Existing local JS (keep order from the original HTML) --}}
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
    <script src="{{ asset('js/custom-marquee.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/countdown-custom.js') }}"></script>

    @livewireScripts
    {{ $scripts ?? '' }}
  </body>
</html>
