@if ($errors->any())
  <div {{ $attributes }} class="my-4 px-4 py-2 border-2 border-red-600 bg-red-200 rounded-md">
    <div class="font-medium text-red-600">{{ __('validation.message') }}</div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
