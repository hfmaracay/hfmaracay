<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/AdrianaFloreal_icon.png') }}" />

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

  @livewireStyles

  @stack('styles')
</head>

<body class="antialiased bg-gray-50">
  <!-- Menu -->
  @include('layouts._menu')

  <!-- Hero -->
  {{ $hero }}

  <!-- Page Content -->
  <main>
    {{ $slot }}
  </main>

  <!-- Footer -->
  @include('layouts._footer')

  @livewireScripts

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/floreal.js') }}"></script>

  @stack('scripts')
</body>
</html>