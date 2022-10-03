<x-guest-layout>
  <x-jet-authentication-card width="small">
    <x-slot name="logo">
      <x-jet-authentication-card-logo />
    </x-slot>

    <div class="my-4 text-sm text-gray-600">
      {{ __('auth.forgot_msg') }}
    </div>

    @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
      </div>
    @endif

    <x-jet-validation-errors />

    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <div class="w-full my-4">
        <x-jet-label for="email" value="{{ __('auth.Email') }}" />
        <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
      </div>

      <div class="my-4 text-center">
        <x-jet-button>
          {{ __('auth.reset_link') }}
        </x-jet-button>
      </div>
    </form>

    <hr />

    <div class="w-full mt-4 flex items-center justify-between">
      @if (Route::has('login'))
        <x-link href="{{ route('login') }}" class="text-sm">
          {{ __('auth.Login') }}
        </x-link>
      @endif

      @if (Route::has('register'))
        <x-link href="{{ route('register') }}" class="text-sm">
          {{ __('auth.Register') }}
        </x-link>
      @endif
    </div>
  </x-jet-authentication-card>
</x-guest-layout>
