@php
  if ($frontend == 'web') {
    $classes = 'inline-block px-5 py-3 font-semibold uppercase text-sm text-white tracking-wider transition';
  } else {
    $classes = 'inline-block px-3 py-2 font-semibold uppercase text-sm text-white tracking-wider rounded-md transition';
  }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>