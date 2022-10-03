<div id="hero-web" style="background-image: url('{{ asset($background) }}');">
  <div class="h-full bg-black bg-opacity-40">
    <div class="container mx-auto h-full p-4 flex items-center justify-center text-center">
      <div id="hero_content" class="w-8/12 text-white transition delay-700 ease-in opacity-0 translate-y-full">
        <h1 class="text-5xl font-semibold uppercase">{{ $title }}</h1>
        <h6 class="text-xl my-5">{{ $description }}</h6>
      </div>
    </div>
  </div>
</div>