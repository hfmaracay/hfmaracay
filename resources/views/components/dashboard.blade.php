<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/AdrianaFloreal_icon.png') }}" />

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ mix('css/fontawesome.css') }}" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

  @livewireStyles

  @stack('styles')
</head>

<body id="page-top">
  <div class="min-h-screen relative flex bg-gray-100">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Page -->
    <div class="relative w-full">
      @include('layouts.navigation-menu')

      <!-- Page Heading -->
      @if (isset($header))
        <header class="bg-white text-floreal-dark shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
          </div>
        </header>
      @endif

      <!-- Page Content -->
      <main class="px-3 pb-20">
        {{ $slot }}
      </main>

      <footer class="absolute bottom-0 left-0 right-0 text-center bg-gray-300 text-florealc-dark text-xs font-semibold py-5">
        <p>Copyright &copy; {{ config('app.name', 'Laravel') }} {{ date('Y') }}</p>
      </footer>
    </div>
  </div>

  @stack('modals')

  <!-- Scroll to Top Button-->
  <a href="#page-top" id="btn-scroll"
    class="hidden fixed bottom-2 right-2 px-5 py-2 rounded-md bg-gray-800 text-white text-center hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:border-gray-900 shadow hover:shadow-lg focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
    <i class="fas fa-angle-up"></i>
  </a>

  @livewireScripts

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/dashboard.js') }}"></script>

  @stack('scripts')
</body>
</html>
