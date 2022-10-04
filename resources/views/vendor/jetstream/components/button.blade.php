<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-4 rounded text-white text-base bg-hfgray font-medium hover:bg-hfred disabled:opacity-25 transition duration-300 ease-in-out']) }}>
    {{ $slot }}
</button>
