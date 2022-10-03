<nav class="mb-3 px-3 py-2 rounded-md shadow-lg bg-gray-200 text-floreal-dark">
  <ol class="list-none flex flex-wrap">
    <li><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></li>
    {{ $slot }}
    <li><span class="mx-2">/</span>{{ $title }}</li>
  </ol>
</nav>