@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-dark']) }}>
  {{ $value ?? $slot }}
</label>
