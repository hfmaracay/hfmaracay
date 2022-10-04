<x-guest-layout>
  <x-jet-authentication-card width="small">
    <x-slot name="logo">
      <x-jet-authentication-card-logo />
    </x-slot>

    <x-jet-validation-errors />

    @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="w-full my-4">
        <x-jet-label for="email" value="{{ __('auth.Email') }}" />
        <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />
      </div>

      <div class="w-full my-4">
        <x-jet-label for="password" value="{{ __('auth.Password') }}" />
        <x-jet-input id="password" type="password" name="password" required />
      </div>

      <div class="w-full my-4">
        <label for="remember_me" class="flex items-center">
          <x-jet-checkbox id="remember_me" name="remember" />
          <span class="ml-2 text-sm">{{ __('auth.Remember_me') }}</span>
        </label>
      </div>

      <div class="my-4 text-center">
        <x-jet-button>
          {{ __('auth.Login') }}
        </x-jet-button>
      </div>
    </form>

    <hr />

    <div class="w-full mt-4 flex items-center justify-between">
      @if (Route::has('password.request'))
        <x-link href="{{ route('password.request') }}" class="text-sm">
          {{ __('auth.Forgot_password') }}
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
