@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full border-0 border-b border-[#afafaf] focus:border-hfred focus:outline-none focus:ring focus:ring-red-200 py-2']) !!} />
