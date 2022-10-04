<div {{ $attributes->merge(['class' => 'my-3 rounded-md shadow-lg bg-white border border-gray-300 overflow-hidden']) }}>
  @if (isset($image))
    {{ $image }}
  @endif

  @if (isset($header))
    <header class="px-3 py-2 bg-gray-200 text-floreal-dark font-semibold border-b border-gray-300">
      <h6>{{ $header }}</h6>
    </header>
  @endif
  
  <div class="px-3 py-2">
    {{ $slot }}
  </div>

  @if (isset($footer))
    <footer class="px-3 py-2 bg-gray-200 text-floreal-medium font-semibold border-t border-gray-300">
      {{ $footer }}
    </footer>
  @endif
</div>