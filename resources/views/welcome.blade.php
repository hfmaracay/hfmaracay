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
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>
<body class="bg-hfgray font-sans antialiased">
  <!-- ====== Navbar Section Start -->
  <div class="ud-header bg-transparent absolute top-0 left-0 z-40 w-full flex items-center">
    <div class="container">
      <div class="flex -mx-4 items-center justify-between relative">
        <div class="px-4 w-60 max-w-full">
          <a href="index.html" class="navbar-logo w-full block py-5">
            <img src="assets/images/logo/logo-white.svg" alt="logo" class="w-full header-logo" />
          </a>
        </div>
        <div class="flex px-4 justify-between items-center w-full">
          <div>
            <button id="navbarToggler" class="block absolute right-4 top-1/2 -translate-y-1/2 lg:hidden focus:ring-2 ring-primary px-3 py-[6px] rounded-lg">
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
              <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
            </button>
            <nav id="navbarCollapse" class="absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">
              <ul class="blcok lg:flex">
                <li class="relative group">
                  <a href="#home" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0">
                    Home
                  </a>
                </li>
                <li class="relative group">
                  <a href="#about" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    About
                  </a>
                </li>
                <li class="relative group">
                  <a href="#pricing" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Pricing
                  </a>
                </li>
                <li class="relative group">
                  <a href="#team" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Team
                  </a>
                </li>
                <li class="relative group">
                  <a href="#contact" class="ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                    Contact
                  </a>
                </li>
                <li class="relative group submenu-item">
                  <a href="javascript:void(0)" class="text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:pl-0 lg:pr-4 flex mx-8 lg:mr-0 lg:ml-8 xl:ml-12 relative after:absolute after:w-2 after:h-2 after:border-b-2 after:border-r-2 after:border-current after:rotate-45 lg:after:right-0 after:right-1 after:top-1/2 after:-translate-y-1/2 after:mt-[-2px]">
                    Pages
                  </a>
                  <div class="submenu hidden relative lg:absolute w-[250px] top-full lg:top-[110%] left-0 rounded-sm lg:shadow-lg p-4lg:block lg:opacity-0 lg:invisible group-hover:opacity-100 lg:group-hover:visible lg:group-hover:top-full bg-white transition-[top] duration-300">
                    <a href="about.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      About Page
                    </a>
                    <a href="pricing.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Pricing Page
                    </a>
                    <a href="contact.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Contact Page
                    </a>
                    <a href="blog-grids.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Blog Grid Page
                    </a>
                    <a href="blog-details.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Blog Details Page
                    </a>
                    <a href="signup.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Sign Up Page
                    </a>
                    <a href="signin.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      Sign In Page
                    </a>
                    <a href="404.html" class="block text-sm text-body-color rounded hover:text-primary py-[10px] px-4">
                      404 Page
                    </a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
          <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
            <a href="signin.html" class="text-base font-medium text-white hover:opacity-70 py-3 px-7 loginBtn">
              Sign In
            </a>
            <a href="signup.html" class="text-base font-medium text-white bg-white bg-opacity-20 rounded-lg py-3 px-6 hover:bg-opacity-100 hover:text-dark signUpBtn duration-300 ease-in-out">
              Sign Up
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Navbar Section End -->


  <div class="min-h-screen bg-gray-100">
      @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block bg-hfred">
          @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
          @endauth
        </div>
      @endif

      <div class="mt-24 h-48 border border-red-600">
        <h2>Solid</h2>
        <i class="fa-solid fa-house"></i> - <i class="fa-solid fa-user"></i> - <i class="fa-solid fa-phone"></i>
      </div>

      <div class="h-48 border border-blue-600 bg-hfblue">
        <h2>Brands</h2>
        <i class="fa-brands fa-facebook"></i> - <i class="fa-brands fa-twitter"></i>
      </div>

      <div class="h-48 border border-green-600">
        <h2>Regular</h2>
        <i class="fa-regular fa-star"></i> - <i class="fa-regular fa-image"></i> - <i class="fa-regular fa-heart"></i>
      </div>

      <div class="grid grid-cols-3 gap-4">
        <div class="border border-green-400">01</div>
        <div class="border border-green-400">02</div>
        <div class="border border-green-400">03</div>
        <div class="border border-green-400">04</div>
        <div class="border border-green-400">05</div>
        <div class="border border-green-400">06</div>
        <div class="border border-green-400">07</div>
        <div class="border border-green-400">08</div>
        <div class="border border-green-400">09</div>
      </div>
  </div>

  @stack('modals')

  @livewireScripts
</body>
</html>
