<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/favicon-96x96.png') }}" />

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/css/animate.css', 'resources/js/app.js', 'resources/js/main.js'])

  <!-- Styles -->
  @livewireStyles

  <!-- ==== WOW JS ==== -->
  <script src="{{ asset("js/wow.min.js") }}"></script>
  <script>
    new WOW().init();
  </script>
</head>
<body class="font-sans antialiased">
  <!-- ====== Navbar Section Start -->
  <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
    <div class="container">
      <div class="flex -mx-4 items-center justify-between relative">
        <div class="px-4 w-52 max-w-full">
          <a href="{{ route("welcome") }}" class="navbar-logo w-full block py-2">
            <img src="{{ asset('img/HFMaracay_Blanco.png') }}" alt="HFMARACAY" title="HFMARACAY" class="header-logo h-24" />
          </a>
        </div>
        <div class="flex px-4 justify-between items-center w-full">
          <div>
            <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
            </button>
            <nav id="navbarCollapse" class="absolute py-5 lg:py-0 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
              <ul class="blcok lg:flex">
                <li class="relative group">
                  <a href="#about" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:text-hfred group-hover:border-b-4 group-hover:border-hfred py-2 lg:py-4 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Comunidad
                  </a>
                </li>
                <li class="relative group">
                  <a href="#events" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:text-hfred group-hover:border-b-4 group-hover:border-hfred py-2 lg:py-4 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Eventos
                  </a>
                </li>
                <li class="relative group">
                  <a href="#team" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:text-hfred group-hover:border-b-4 group-hover:border-hfred py-2 lg:py-4 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Equipo
                  </a>
                </li>
                <li class="relative group">
                  <a href="#contact" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:text-hfred group-hover:border-b-4 group-hover:border-hfred py-2 lg:py-4 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Contacto
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/dashboard') }}" class="text-base font-medium text-white bg-white bg-opacity-30 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark duration-300 ease-in-out">Dashboard</a>
              @else
                <a href="{{ route('login') }}" class="text-base font-medium text-white py-3 px-6 mr-2 hover:rounded-lg hover:bg-opacity-30 hover:bg-white duration-300 ease-in-out loginBtn">Iniciar Sesión</a>

                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="text-base font-medium text-white bg-white bg-opacity-30 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark duration-300 ease-in-out signUpBtn">Registro</a>
                @endif
              @endauth
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Navbar Section End -->
  
  <!-- ====== Hero Section Start -->
  <div id="home" class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-hfgray">
    <div class="container">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4">
          <div class="hero-content text-center max-w-[780px] mx-auto wow fadeInUp" data-wow-delay=".2s">
            <h1 class="text-white font-bold text-3xl sm:text-4xl md:text-[45px] leading-snug sm:leading-snug md:leading-snug mb-8">
               La comunidad de tecnología mas grande del mundo
            </h1>
            <p class="text-base sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed mx-auto mb-10 text-[#e4e4e4] max-w-[600px]">
              Ven a formar parte de la comunidad
            </p>
            <div class="text-center wow fadeInUp" data-wow-delay=".3s">
              <a href="{{ route('register') }}" class="py-4 px-6 sm:px-10 inline-flex items-center justify-center text-center text-white text-base bg-hfred hover:bg-white hover:text-hfgray hover:shadow-lg font-medium rounded-lg transition duration-300 ease-in-out">
                Únete
              </a>
            </div>
          </div>
        </div>

        <div class="w-full px-4">
          <div class="mx-auto max-w-[845px] relative z-10 wow fadeInUp" data-wow-delay=".25s">
            <div class="mt-16">
              <img src="{{ asset("img/hero.jpg") }}" alt="Miembros HFMaracay" title="Miembros HFMaracay" class="max-w-full mx-auto rounded-t-xl rounded-tr-xl" />
            </div>
            <div class="absolute z-[-1] bottom-0 -left-9">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
              </svg>
            </div>
            <div class="absolute z-[-1] -top-6 -right-6">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Hero Section End -->

  <!-- ====== About Section Start -->
  <section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-hfgray-light">
    <div class="container">
      <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="lg:flex items-center justify-between border overflow-hidden">
              <div class="lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px]">
                <span class="text-sm font-medium text-white py-2 px-5 bg-hfgray inline-block mb-5">
                  Comunidad
                </span>
                <h2 class="font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6">
                  Hackers/Founders Maracay
                </h2>
                <p class="text-base text-body-color mb-9 leading-relaxed">
                  H/F es una comunidad iniciada por fundadores para fundadores que apoya a los emprendedores y ecosistemas tecnológicos de todo el mundo. Tendemos a ser muy nerds y colaboradores, y realmente nos gusta aprender y compartir libremente ideas.
                </p>
                <p class="text-base text-body-color mb-9 leading-relaxed">
                  El capítulo H/F Maracay nace en febrero de 2016, siendo el pionero en nuestro país, gracias a sus fundadores: Rafael Hernández y Héctor Rondón; quienes trajeron a nuestra ciudad los eventos de meetups.
                </p>
                <p class="text-base text-body-color mb-9 leading-relaxed">
                  Meetups = Reuniones de Panas de Tecnología y Emprendimiento.
                </p>
                <a href="javascript:void(0)" class="inline-flex items-center justify-center py-4 px-6 rounded text-white bg-hfred text-base font-medium hover:bg-opacity-90 hover:shadow-lg transition duration-300 ease-in-out">
                  Conoce más <i class="fa-solid fa-chevron-right ml-2"></i>
                </a>
              </div>
              <div class="text-center">
                <div class="relative inline-block z-10">
                  <img src="{{ asset("img/MapaHF.jpg") }}" alt="MAPA HF" title="MAPA HF" class="mx-auto lg:ml-auto" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->

  <!-- ====== Events Section Start -->
  <section id="events" class="pt-20 pb-8">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="mb-12 lg:mb-20 max-w-[620px]">
            <span class="font-semibold text-lg text-hfred mb-2 block">
              Eventos
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
              Nuestra trayectoria
            </h2>
            <p class="text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
              Desde el 2016 nuestra meta es apoyarnos en comunidad para que el emprendimiento duela menos y respondiendo a la pregunta ¿En qué te podemos ayudar? hemos realizado diversas actividades de networking.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/4 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".1s">
            <div class="w-[70px] h-[70px] flex items-center justify-center bg-hfred rounded-2xl mb-8 relative z-10">
              <span class="w-[70px] h-[70px] flex items-center justify-center bg-hfred bg-opacity-40 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
              <i class="fa-solid fa-users fa-lg text-white"></i>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Meetups
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Hemos realizado 34 reuniones, durante nuestros años más activos con frecuencia mensual; hacemos networking y compartimos problemas y soluciones.
            </p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s">
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-hfred rounded-2xl mb-8 relative z-10">
              <span class="w-[70px] h-[70px] flex items-center justify-center bg-hfred bg-opacity-40 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
              <i class="fa-solid fa-rocket fa-lg text-white"></i>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Startup Weekend
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Organizamos 3 Startup Weekend, un evento donde traes tu idea de negocio y aprendes a convertirla en una startup en un fin de semana.
            </p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
            <div class="w-[70px] h-[70px] flex items-center justify-center bg-hfred rounded-2xl mb-8 relative z-10">
              <span class="w-[70px] h-[70px] flex items-center justify-center bg-hfred bg-opacity-40 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
              <i class="fa-solid fa-desktop fa-lg text-white"></i>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Hackathon
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Impulsamos 2 Hackathones para resolver problemas de 2 empresas reales de nuestra ciudad, dando a conocer el talento local.
            </p>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".25s">
            <div class="w-[70px] h-[70px] flex items-center justify-center bg-hfred rounded-2xl mb-8 relative z-10">
              <span class="w-[70px] h-[70px] flex items-center justify-center bg-hfred bg-opacity-40 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300"></span>
              <i class="fa-solid fa-thumbs-up fa-lg text-white"></i>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Markethon
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Innovamos al crear el primer evento donde los asistentes eran mentoreados para crear la estrategia de lanzamiento de un producto de una empresa local.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Events Section End -->

  <!-- ====== Faq Section Start -->
  <section id="faq" class="bg-hfgray-light pt-20 pb-12 relative z-20 overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
            <span class="font-semibold text-lg text-hfred mb-2 block">
              Preguntas Frecuentes
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
              ¿Alguna duda?
            </h2>
            <p class="text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
              Esperamos responder algunas de tus inquietudes.
            </p>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/2 px-4">
          <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".1s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿Qué es un Meetup?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <p class="text-base text-body-color leading-relaxed py-3">
                Nuestros meetups son reuniones de panas, donde conversamos de temas tecnológicos y de emprendimiento junto a algunas cervezas, para mantener la tradición de los fundadores originales, pero al mejor estilo venezolano.
              </p>
            </div>
          </div>
          <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".15s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿Cuándo y dónde nos reunimos?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <p class="text-base text-body-color leading-relaxed py-3">
                Nuestros meetups son realizados una vez al mes, cada segundo viernes, a partir de las 5:00pm.
              </p>
            </div>
          </div>
          <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".2s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿Qué hacemos en H/F Maracay?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <p class="text-base text-body-color leading-relaxed py-3">
                Ayudamos a que el emprendimiento duela menos. Dinos ¿en qué te podemos ayudar? y estaremos encantados de hacerlo.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".1s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿A quiénes busca H/F Maracay?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <p class="text-base text-body-color leading-relaxed py-3">
                A ti que eres amante de la tecnología y emprendedor, puedes ser programador, desarrollador, administrador, ingeniero, abogado o cualquier otra ocupación que exista, solo debes tener las ganas, estar dispuesto a comprometerte con la comunidad y compartir tus experiencias y dudas.
              </p>
            </div>
          </div>
          <div class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".15s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿Cuál es nuestro enfoque?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <p class="text-base text-body-color leading-relaxed py-3">
                Nuestra comunidad está constituida por una selección muy variada de perfiles profesionales, todos con una gran motivación para colaborar entre sí. Dentro de la comunidad hay muchos programadores, diseñadores, especialistas en marketing y emprendimiento. También hay muchos founders los cuales te contarán sus experiencias y de los cuales podrás aprender muchísimo.
              </p>
            </div>
          </div>
          <div
            class="single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-5 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".2s">
            <button class="faq-btn flex items-center w-full text-left">
              <div class="w-full max-w-[40px] h-10 flex items-center justify-center rounded-lg bg-hfred text-hfred bg-opacity-20 mr-5">
                <i class="fa-solid fa-chevron-down icon"></i>
              </div>
              <div class="w-full">
                <h4 class="text-base sm:text-lg font-semibold text-black">
                  ¿Cuáles son nuestras reglas?
                </h4>
              </div>
            </button>
            <div class="faq-content pl-[62px] hidden">
              <ol class="list-decimal list-inside">
                <li>No seas idiota</li>
                <li>Haz lo correcto para tu comunidad</li>
                <li>Si vas a usar la marca de H/F, POR FAVOR no lo arruines</li>
                <li>Dinos lo que necesita tu comunidad</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute bottom-0 right-0 z-[-1]">
      <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.5" d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z" fill="url(#paint0_linear)" />
        <defs>
          <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681" gradientUnits="userSpaceOnUse">
            <stop stop-color="#ff6967" stop-opacity="0.36" />
            <stop offset="1" stop-color="#ff6967" stop-opacity="0" />
            <stop offset="1" stop-color="#ff6967" stop-opacity="0.096144" />
          </linearGradient>
        </defs>
      </svg>
    </div>
  </section>
  <!-- ====== Faq Section End -->

  <!-- ====== Team Section Start -->
  <section id="team" class="pt-20 pb-10 lg:pb-20">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="text-center mx-auto mb-[60px] max-w-[620px]">
            <span class="font-semibold text-lg text-hfred mb-2 block">
              Miembros
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4">
              Nuestro Equipo
            </h2>
            <p class="text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
              Somos una comunidad donde todos pueden sentirse bienvenidos.
            </p>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
          <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
            <div class="relative w-[170px] h-170px] rounded-full z-10 mx-auto mb-6">
              <img src="{{ asset("img/team/Dayan_Betancourt.jpg") }}" alt="Dayan Betancourt" title="Dayan Betancourt" class="w-full rounded-full" />
              <span class="absolute top-0 left-0 z-[-1]">
                <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#ff6967" />
                  <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#ff6967" />
                  <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#ff6967" />
                  <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#ff6967" />
                  <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#ff6967" />
                  <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#ff6967" />
                  <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#ff6967" />
                  <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#ff6967" />
                  <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#ff6967" />
                  <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#ff6967" />
                  <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#ff6967" />
                  <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#ff6967" />
                  <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#ff6967" />
                  <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#ff6967" />
                  <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#ff6967" />
                  <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#ff6967" />
                  <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#ff6967" />
                  <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#ff6967" />
                  <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#ff6967" />
                  <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#ff6967" />
                  <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#ff6967" />
                  <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#ff6967" />
                  <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#ff6967" />
                  <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#ff6967" />
                  <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#ff6967" />
                  <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#ff6967" />
                  <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#ff6967" />
                  <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#ff6967" />
                  <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#ff6967" />
                  <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#ff6967" />
                  <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#ff6967" />
                  <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#ff6967" />
                  <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#ff6967" />
                  <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#ff6967" />
                  <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#ff6967" />
                  <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#ff6967" />
                  <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#ff6967" />
                  <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#ff6967" />
                  <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#ff6967" />
                  <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#ff6967" />
                  <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#ff6967" />
                  <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#ff6967" />
                  <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#ff6967" />
                  <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#ff6967" />
                  <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#ff6967" />
                  <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#ff6967" />
                  <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#ff6967" />
                  <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#ff6967" />
                  <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#ff6967" />
                  <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#ff6967" />
                  <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#ff6967" />
                  <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#ff6967" />
                  <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#ff6967" />
                  <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#ff6967" />
                  <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#ff6967" />
                  <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#ff6967" />
                </svg>
              </span>
              <span class="absolute right-0 bottom-0">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#2f364b" />
                </svg>
              </span>
            </div>
            <div class="text-center">
              <h4 class="font-medium text-lg text-dark mb-2">
                Dayan Betancourt
              </h4>
              <p class="font-medium text-sm text-body-color mb-5">
                Líder Organizador
              </p>
              <div class="flex items-center justify-center">
                <a href="https://www.facebook.com/delfinbeta" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/delfinbeta" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/delfinbeta/" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
          <div class="mb-10 wow fadeInUp" data-wow-delay=".15s">
            <div class=" relative w-[170px] h-170px] rounded-full z-10 mx-auto mb-6">
              <img src="{{ asset("img/team/Marco_Hernandez.jpg") }}" alt="Marco Hernandez" title="Marco Hernandez" class="w-full rounded-full" />
              <span class="absolute top-0 left-0 z-[-1]">
                <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#2f364b" />
                  <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#2f364b" />
                  <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#2f364b" />
                  <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#2f364b" />
                  <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#2f364b" />
                  <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#2f364b" />
                  <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#2f364b" />
                  <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#2f364b" />
                  <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#2f364b" />
                  <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#2f364b" />
                  <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#2f364b" />
                  <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#2f364b" />
                  <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#2f364b" />
                  <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#2f364b" />
                  <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#2f364b" />
                  <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#2f364b" />
                  <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#2f364b" />
                  <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#2f364b" />
                  <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#2f364b" />
                  <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#2f364b" />
                  <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#2f364b" />
                  <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#2f364b" />
                  <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#2f364b" />
                  <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#2f364b" />
                  <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#2f364b" />
                  <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#2f364b" />
                  <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#2f364b" />
                  <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#2f364b" />
                  <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#2f364b" />
                  <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#2f364b" />
                  <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#2f364b" />
                  <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#2f364b" />
                  <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#2f364b" />
                  <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#2f364b" />
                  <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#2f364b" />
                  <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#2f364b" />
                  <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#2f364b" />
                  <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#2f364b" />
                  <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#2f364b" />
                  <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#2f364b" />
                  <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#2f364b" />
                  <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#2f364b" />
                  <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#2f364b" />
                  <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#2f364b" />
                  <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#2f364b" />
                  <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#2f364b" />
                  <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#2f364b" />
                  <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#2f364b" />
                  <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#2f364b" />
                  <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#2f364b" />
                  <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#2f364b" />
                  <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#2f364b" />
                  <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#2f364b" />
                  <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#2f364b" />
                  <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#2f364b" />
                  <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#2f364b" />
                </svg>
              </span>
              <span class="absolute right-0 bottom-0">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#ff6967" />
                </svg>
              </span>
            </div>
            <div class="text-center">
              <h4 class="font-medium text-lg text-dark mb-2">
                Marco Hernandez
              </h4>
              <p class="font-medium text-sm text-body-color mb-5">
                Co-organizador
              </p>
              <div class="flex items-center justify-center">
                <a href="https://www.facebook.com/marcoah17" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/marcoah17" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/marcoah17/" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
          <div class="mb-10 wow fadeInUp" data-wow-delay=".2s">
            <div class=" relative w-[170px] h-170px] rounded-full z-10 mx-auto mb-6">
              <img src="{{ asset("img/team/Manuel_Gomez.jpg") }}" alt="Manuel Gomez" title="Manuel Gomez" class="w-full rounded-full" />
              <span class="absolute top-0 left-0 z-[-1]">
                <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#ff6967" />
                  <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#ff6967" />
                  <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#ff6967" />
                  <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#ff6967" />
                  <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#ff6967" />
                  <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#ff6967" />
                  <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#ff6967" />
                  <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#ff6967" />
                  <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#ff6967" />
                  <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#ff6967" />
                  <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#ff6967" />
                  <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#ff6967" />
                  <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#ff6967" />
                  <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#ff6967" />
                  <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#ff6967" />
                  <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#ff6967" />
                  <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#ff6967" />
                  <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#ff6967" />
                  <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#ff6967" />
                  <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#ff6967" />
                  <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#ff6967" />
                  <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#ff6967" />
                  <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#ff6967" />
                  <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#ff6967" />
                  <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#ff6967" />
                  <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#ff6967" />
                  <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#ff6967" />
                  <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#ff6967" />
                  <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#ff6967" />
                  <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#ff6967" />
                  <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#ff6967" />
                  <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#ff6967" />
                  <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#ff6967" />
                  <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#ff6967" />
                  <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#ff6967" />
                  <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#ff6967" />
                  <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#ff6967" />
                  <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#ff6967" />
                  <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#ff6967" />
                  <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#ff6967" />
                  <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#ff6967" />
                  <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#ff6967" />
                  <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#ff6967" />
                  <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#ff6967" />
                  <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#ff6967" />
                  <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#ff6967" />
                  <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#ff6967" />
                  <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#ff6967" />
                  <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#ff6967" />
                  <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#ff6967" />
                  <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#ff6967" />
                  <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#ff6967" />
                  <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#ff6967" />
                  <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#ff6967" />
                  <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#ff6967" />
                  <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#ff6967" />
                </svg>
              </span>
              <span class="absolute right-0 bottom-0">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#2f364b" />
                </svg>
              </span>
            </div>
            <div class="text-center">
              <h4 class="font-medium text-lg text-dark mb-2">
                Manuel Gomez
              </h4>
              <p class="font-medium text-sm text-body-color mb-5">
                Co-organizador
              </p>
              <div class="flex items-center justify-center">
                <a href="https://www.instagram.com/mangomzlar/" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
          <div class="mb-10 wow fadeInUp" data-wow-delay=".25s">
            <div class="relative w-[170px] h-170px] rounded-full z-10 mx-auto mb-6">
              <img src="{{ asset("img/team/Pablo_Aponte.jpg") }}" alt="Pablo Aponte" title="Pablo Aponte" class="w-full rounded-full" />
              <span class="absolute top-0 left-0 z-[-1]">
                <svg width="71" height="82" viewBox="0 0 71 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.29337" cy="80.7066" r="1.29337" transform="rotate(-90 1.29337 80.7066)" fill="#2f364b" />
                  <circle cx="12.6747" cy="80.7066" r="1.29337" transform="rotate(-90 12.6747 80.7066)" fill="#2f364b" />
                  <circle cx="24.0575" cy="80.7066" r="1.29337" transform="rotate(-90 24.0575 80.7066)" fill="#2f364b" />
                  <circle cx="35.4379" cy="80.7066" r="1.29337" transform="rotate(-90 35.4379 80.7066)" fill="#2f364b" />
                  <circle cx="46.8197" cy="80.7066" r="1.29337" transform="rotate(-90 46.8197 80.7066)" fill="#2f364b" />
                  <circle cx="68.807" cy="80.7066" r="1.29337" transform="rotate(-90 68.807 80.7066)" fill="#2f364b" />
                  <circle cx="57.9443" cy="80.7066" r="1.29337" transform="rotate(-90 57.9443 80.7066)" fill="#2f364b" />
                  <circle cx="1.29337" cy="69.3249" r="1.29337" transform="rotate(-90 1.29337 69.3249)" fill="#2f364b" />
                  <circle cx="12.6747" cy="69.3249" r="1.29337" transform="rotate(-90 12.6747 69.3249)" fill="#2f364b" />
                  <circle cx="24.0575" cy="69.3249" r="1.29337" transform="rotate(-90 24.0575 69.3249)" fill="#2f364b" />
                  <circle cx="35.4379" cy="69.3249" r="1.29337" transform="rotate(-90 35.4379 69.3249)" fill="#2f364b" />
                  <circle cx="46.8197" cy="69.325" r="1.29337" transform="rotate(-90 46.8197 69.325)" fill="#2f364b" />
                  <circle cx="68.807" cy="69.325" r="1.29337" transform="rotate(-90 68.807 69.325)" fill="#2f364b" />
                  <circle cx="57.9433" cy="69.325" r="1.29337" transform="rotate(-90 57.9433 69.325)" fill="#2f364b" />
                  <circle cx="1.29337" cy="57.9433" r="1.29337" transform="rotate(-90 1.29337 57.9433)" fill="#2f364b" />
                  <circle cx="1.29337" cy="24.0568" r="1.29337" transform="rotate(-90 1.29337 24.0568)" fill="#2f364b" />
                  <circle cx="12.6747" cy="57.9433" r="1.29337" transform="rotate(-90 12.6747 57.9433)" fill="#2f364b" />
                  <circle cx="12.6747" cy="24.0568" r="1.29337" transform="rotate(-90 12.6747 24.0568)" fill="#2f364b" />
                  <circle cx="24.0575" cy="57.9433" r="1.29337" transform="rotate(-90 24.0575 57.9433)" fill="#2f364b" />
                  <circle cx="24.0575" cy="24.0568" r="1.29337" transform="rotate(-90 24.0575 24.0568)" fill="#2f364b" />
                  <circle cx="35.4379" cy="57.9433" r="1.29337" transform="rotate(-90 35.4379 57.9433)" fill="#2f364b" />
                  <circle cx="35.4379" cy="24.0568" r="1.29337" transform="rotate(-90 35.4379 24.0568)" fill="#2f364b" />
                  <circle cx="46.8197" cy="57.9431" r="1.29337" transform="rotate(-90 46.8197 57.9431)" fill="#2f364b" />
                  <circle cx="46.8197" cy="24.0567" r="1.29337" transform="rotate(-90 46.8197 24.0567)" fill="#2f364b" />
                  <circle cx="68.807" cy="57.9431" r="1.29337" transform="rotate(-90 68.807 57.9431)" fill="#2f364b" />
                  <circle cx="68.807" cy="24.0567" r="1.29337" transform="rotate(-90 68.807 24.0567)" fill="#2f364b" />
                  <circle cx="57.9433" cy="57.9431" r="1.29337" transform="rotate(-90 57.9433 57.9431)" fill="#2f364b" />
                  <circle cx="57.9443" cy="24.0567" r="1.29337" transform="rotate(-90 57.9443 24.0567)" fill="#2f364b" />
                  <circle cx="1.29337" cy="46.5615" r="1.29337" transform="rotate(-90 1.29337 46.5615)" fill="#2f364b" />
                  <circle cx="1.29337" cy="12.6751" r="1.29337" transform="rotate(-90 1.29337 12.6751)" fill="#2f364b" />
                  <circle cx="12.6747" cy="46.5615" r="1.29337" transform="rotate(-90 12.6747 46.5615)" fill="#2f364b" />
                  <circle cx="12.6747" cy="12.6751" r="1.29337" transform="rotate(-90 12.6747 12.6751)" fill="#2f364b" />
                  <circle cx="24.0575" cy="46.5615" r="1.29337" transform="rotate(-90 24.0575 46.5615)" fill="#2f364b" />
                  <circle cx="24.0575" cy="12.6751" r="1.29337" transform="rotate(-90 24.0575 12.6751)" fill="#2f364b" />
                  <circle cx="35.4379" cy="46.5615" r="1.29337" transform="rotate(-90 35.4379 46.5615)" fill="#2f364b" />
                  <circle cx="35.4379" cy="12.6751" r="1.29337" transform="rotate(-90 35.4379 12.6751)" fill="#2f364b" />
                  <circle cx="46.8197" cy="46.5615" r="1.29337" transform="rotate(-90 46.8197 46.5615)" fill="#2f364b" />
                  <circle cx="46.8197" cy="12.6751" r="1.29337" transform="rotate(-90 46.8197 12.6751)" fill="#2f364b" />
                  <circle cx="68.807" cy="46.5615" r="1.29337" transform="rotate(-90 68.807 46.5615)" fill="#2f364b" />
                  <circle cx="68.807" cy="12.6751" r="1.29337" transform="rotate(-90 68.807 12.6751)" fill="#2f364b" />
                  <circle cx="57.9433" cy="46.5615" r="1.29337" transform="rotate(-90 57.9433 46.5615)" fill="#2f364b" />
                  <circle cx="57.9443" cy="12.6751" r="1.29337" transform="rotate(-90 57.9443 12.6751)" fill="#2f364b" />
                  <circle cx="1.29337" cy="35.1798" r="1.29337" transform="rotate(-90 1.29337 35.1798)" fill="#2f364b" />
                  <circle cx="1.29337" cy="1.2933" r="1.29337" transform="rotate(-90 1.29337 1.2933)" fill="#2f364b" />
                  <circle cx="12.6747" cy="35.1798" r="1.29337" transform="rotate(-90 12.6747 35.1798)" fill="#2f364b" />
                  <circle cx="12.6747" cy="1.2933" r="1.29337" transform="rotate(-90 12.6747 1.2933)" fill="#2f364b" />
                  <circle cx="24.0575" cy="35.1798" r="1.29337" transform="rotate(-90 24.0575 35.1798)" fill="#2f364b" />
                  <circle cx="24.0575" cy="1.29336" r="1.29337" transform="rotate(-90 24.0575 1.29336)" fill="#2f364b" />
                  <circle cx="35.4379" cy="35.1798" r="1.29337" transform="rotate(-90 35.4379 35.1798)" fill="#2f364b" />
                  <circle cx="35.4379" cy="1.29336" r="1.29337" transform="rotate(-90 35.4379 1.29336)" fill="#2f364b" />
                  <circle cx="46.8197" cy="35.18" r="1.29337" transform="rotate(-90 46.8197 35.18)" fill="#2f364b" />
                  <circle cx="46.8197" cy="1.29354" r="1.29337" transform="rotate(-90 46.8197 1.29354)" fill="#2f364b" />
                  <circle cx="68.807" cy="35.18" r="1.29337" transform="rotate(-90 68.807 35.18)" fill="#2f364b" />
                  <circle cx="68.807" cy="1.29354" r="1.29337" transform="rotate(-90 68.807 1.29354)" fill="#2f364b" />
                  <circle cx="57.9443" cy="35.18" r="1.29337" transform="rotate(-90 57.9443 35.18)" fill="#2f364b" />
                  <circle cx="57.9443" cy="1.29354" r="1.29337" transform="rotate(-90 57.9443 1.29354)" fill="#2f364b" />
                </svg>
              </span>
              <span class="absolute right-0 bottom-0">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z" stroke="#ff6967" />
                </svg>
              </span>
            </div>
            <div class="text-center">
              <h4 class="font-medium text-lg text-dark mb-2">
                Pablo Aponte
              </h4>
              <p class="font-medium text-sm text-body-color mb-5">
                Co-organizador
              </p>
              <div class="flex items-center justify-center">
                <a href="https://www.facebook.com/peipol96" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/Peipol_" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/peipol_/" target="_blank" class="text-hfgray hover:text-hfred w-8 h-8 mx-2 flex items-center justify-center">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Team Section End -->

  <!-- ====== Contact Start ====== -->
  <section id="contact" class="py-20 relative">
    <div class="absolute z-[-1] w-full h-1/2 lg:h-[45%] xl:h-1/2 bg-hfgray-light top-0 left-0"></div>
    <div class="container px-4">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="px-4 w-full lg:w-7/12">
          <div class="ud-contact-content-wrapper">
            <div class="ud-contact-title mb-12 lg:mb-[150px]">
              <span class="text-dark font-semibold text-base mb-5">
                Contáctanos
              </span>
              <h2 class="text-[35px] font-semibold">
                Hablemos <br />
                Nos encanta ¡conectar!
              </h2>
            </div>
            <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
              <div class="flex max-w-full w-[330px] mb-8">
                <div class="text-[32px] text-hfred mr-6">
                  <i class="fas fa-phone"></i>
                </div>
                <div>
                  <h5 class="text-lg font-semibold mb-6">Teléfono</h5>
                  <a href="tel:+584243172126" class="text-base text-body-color">
                    +58 (424) 317.21.26
                  </a>
                </div>
              </div>
              <div class="flex max-w-full w-[330px] mb-8">
                <div class="text-[32px] text-hfred mr-6">
                  <i class="fas fa-envelope"></i>
                </div>
                <div>
                  <h5 class="text-lg font-semibold mb-6">Email</h5>
                  <a href="mailto:hola@hfmaracay.com" class="text-base text-body-color">hola@hfmaracay.com</a>
                  <a href="mailto:dayan@hf.cx" class="text-base text-body-color">dayan@hf.cx</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="px-4 w-full lg:w-5/12">
          <div class="shadow-testimonial rounded-lg bg-white py-10 px-8 md:p-[60px] lg:p-10 2xl:p-[60px] sm:py-12 sm:px-10 lg:py-12 lg:px-10 wow fadeInUp" data-wow-delay=".2s">
            <h3 class="font-semibold mb-8 text-2xl md:text-[26px]">
              Escríbenos
            </h3>
            <div class="text-sm text-green-600 bg-green-200 px-2 py-1 my-2 {{ !session()->has('message') ? 'hidden' : '' }}">
              {{ session()->has('message') ? session()->get('message') : '' }}
            </div>
            @if ($errors->any())
              <div class="text-sm text-red-600 bg-red-200 px-2 py-1 my-2">
                <ul class="list-disc list-inside">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form id="form-contact" name="form-contact" method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
                <div class="w-full">
                  <x-jet-label for="first_name" value="{{ __('auth.First_Name') }}" />
                  <x-jet-input type="text" id="first_name" name="first_name" :value="old('first_name')" placeholder="Maria" required />
                  @error('first_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                  @enderror
                </div>
                <div class="w-full">
                  <x-jet-label for="last_name" value="{{ __('auth.Last_Name') }}" />
                  <x-jet-input type="text" id="last_name" name="last_name" :value="old('last_name')" placeholder="Perez" required />
                  @error('last_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                  @enderror
                </div>
                <div class="w-full md:col-span-2">
                  <x-jet-label for="email" value="{{ __('auth.Email') }}" />
                  <x-jet-input type="email" id="email" name="email" :value="old('email')" placeholder="nombre@email.com" required />
                  @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                  @enderror
                </div>
                <div class="w-full md:col-span-2">
                  <x-jet-label for="phone" value="{{ __('auth.Phone') }}" />
                  <x-jet-input type="text" id="phone" name="phone" :value="old('phone')" placeholder="(424)-555-4433" pattern="^\(\d{3}\)-\d{3}-\d{4}$" />
                </div>
                <div class="w-full md:col-span-2">
                  <x-jet-label for="message" value="Mensaje" />
                  <textarea id="message" name="message" rows="1" placeholder="escribe tu mensaje aquí" class="w-full border-0 border-b border-[#afafaf] focus:border-hfred focus:outline-none focus:ring focus:ring-red-200 py-2 resize-none" required>{{ old('message') }}</textarea>
                  @error('message')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="mt-4 text-center">
                <x-jet-button>
                  Enviar Mensaje
                </x-jet-button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Contact End ====== -->

  <!-- ====== Footer Section Start -->
  <footer class="bg-hfgray pt-20 relative z-10 wow fadeInUp" data-wow-delay=".15s">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12 px-4">
          <div class="w-full mb-4">
            <a href="javascript:void(0)" class="inline-block max-w-[160px] mb-6">
              <img src="{{ asset("img/HFMaracay_Blanco.png") }}" alt="HFMARACAY" title="HFMARACAY" class="max-w-full" />
            </a>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-3/12 px-4">
          <div class="w-full mb-4">
            <h4 class="text-white text-lg font-semibold mb-9">El Networking</h4>
            <p class="text-base text-[#f3f4fe] mb-7">
              Tu red de contactos es vital en tu carrera profesional y en tus emprendimientos.
            </p>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-3/12 px-4">
          <div class="w-full mb-4">
            <h4 class="text-white text-lg font-semibold mb-9">Enlaces</h4>
            <ul>
              <li>
                <a href="#about" class="inline-block text-base text-[#f3f4fe] hover:text-hfred leading-loose mb-2">
                  Comunidad
                </a>
              </li>
              <li>
                <a href="j#events" class="inline-block text-base text-[#f3f4fe] hover:text-hfred leading-loose mb-2">
                  Eventos
                </a>
              </li>
              <li>
                <a href="#team" class="inline-block text-base text-[#f3f4fe] hover:text-hfred leading-loose mb-2">
                  Equipo
                </a>
              </li>
              <li>
                <a href="#contact" class="inline-block text-base text-[#f3f4fe] hover:text-hfred leading-loose mb-2">
                  Contacto
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-3/12 px-4">
          <div class="w-full mb-4">
            <h4 class="text-white text-lg font-semibold mb-9">Redes Sociales</h4>
            <ul class="flex flex-wrap items-center">
              <li>
                <a href="https://www.facebook.com/HFMaracay/" rel="nofollow noopner" target="_blank" class="block mb-6 mr-5 max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                  <i class="fab fa-facebook-f fa-lg text-white"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/hfmaracay" rel="nofollow noopner" target="_blank" class="block mb-6 mr-5 max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                  <i class="fab fa-twitter fa-lg text-white"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/hfmaracay/" rel="nofollow noopner" target="_blank" class="block mb-6 mr-5 max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                  <i class="fab fa-instagram fa-lg text-white"></i>
                </a>
              </li>
              <li>
                <a href="https://t.me/hfmaracay" rel="nofollow noopner" target="_blank" class="block mb-6 mr-5 max-w-[120px] xl:max-w-[100px] 2xl:max-w-[120px]">
                  <i class="fab fa-telegram-plane fa-lg text-white"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="border-t border-opacity-40 py-3 mt-12">
      <div class="container">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full md:w-2/3 lg:w-1/2 px-4">
            <p class="text-sm text-[#f3f4fe]">
              &copy; Todos los derechos reservados {{ date('Y') }}
            </p>
          </div>
          <div class="w-full md:w-1/3 lg:w-1/2 px-4">
            <div class="flex justify-center md:justify-end">
              <p class="text-xs text-[#f3f4fe]">
                Diseño de 
                <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank">
                  TailGrids and UIdeck
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <span class="absolute left-0 top-0 z-[-1]">
        <img src="{{ asset("img/footer/shape-1.svg") }}" alt="" class="lg:w-1/2" />
      </span>

      <span class="absolute bottom-0 right-0 z-[-1]">
        <img src="{{ asset("img/footer/shape-3.svg") }}" alt="" />
      </span>
    </div>
  </footer>
  <!-- ====== Footer Section End -->

  <!-- ====== Back To Top Start -->
  <a href="javascript:void(0)" class="hidden items-center justify-center bg-hfgray-medium text-white w-10 h-10 rounded-md fixed bottom-8 right-8 left-auto z-[999] hover:bg-hfred back-to-top shadow-md transition duration-300 ease-in-out">
    <span class="w-3 h-3 border-t border-l border-white rotate-45 mt-[6px]"></span>
  </a>
  <!-- ====== Back To Top End -->

  @stack('modals')

  @livewireScripts

  <!-- ====== All Scripts -->
  <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");

    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      });
    });

    // section menu active
    function onScroll(event) {
      const sections = document.querySelectorAll(".ud-menu-scroll");
      const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

      for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
          document
            .querySelector(".ud-menu-scroll")
            .classList.remove("active");
          currLink.classList.add("active");
        } else {
          currLink.classList.remove("active");
        }
      }
    }

    window.document.addEventListener("scroll", onScroll);

    let phone = document.getElementById('phone');
  
    function formatTlf(e) {
      if ((this.value.length < 15) && ((e.keyCode > 47 && e.keyCode < 58) || (e.keyCode > 95 && e.keyCode < 106))) {
        this.value = this.value.replace(/\(?(\d{3})\)?\-?(\d{3})\-?/, '($1)-$2-');
      } else {
        this.value = this.value.slice(0, -1);
      }
    }

    phone.addEventListener('keyup', formatTlf);

    if ({{ $errors->any() }}) {
      document.getElementById('first_name').focus();
    }
  </script>
</body>
</html>
