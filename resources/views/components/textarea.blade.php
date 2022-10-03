@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full mt-1 border-floreal-medium rounded-md shadow-sm focus:border-florealc-dark focus:ring focus:ring-florealc-medium focus:ring-opacity-50']) !!}>{{ $slot }}</textarea>
