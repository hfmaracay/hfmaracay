<x-guest-layout>
  <x-jet-authentication-card width="big">
    <x-slot name="logo">
      <x-jet-authentication-card-logo />
    </x-slot>

    <x-jet-validation-errors />

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="grid gap-4 grid-cols-1 md:grid-cols-2 my-4">
        <div class="w-full">
          <x-jet-label for="first_name" value="{{ __('auth.First_Name') }}" />
          <x-jet-input type="text" id="first_name" name="first_name" :value="old('first_name')" required autofocus />
        </div>
        <div class="w-full">
          <x-jet-label for="last_name" value="{{ __('auth.Last_Name') }}" />
          <x-jet-input type="text" id="last_name" name="last_name" :value="old('last_name')" required />
        </div>
        <div class="w-full">
          <x-jet-label for="email" value="{{ __('auth.Email') }}" />
          <x-jet-input type="email" id="email" name="email" :value="old('email')" required />
        </div>
        <div class="w-full">
          <x-jet-label for="phone" value="{{ __('auth.Phone') }}" />
          <x-jet-input id="phone" type="text" name="phone" :value="old('phone')" pattern="^\(\d{3}\)-\d{3}-\d{4}$" />
        </div>
        <div class="w-full md:col-span-2">
          <div class="block font-semibold text-sm text-dark mb-2">{{ __('auth.Gender') }}</div>
          <x-radio id="male" name="gender" value="M">{{ __('session.Male') }}</x-radio>
          <x-radio id="female" name="gender" value="F">{{ __('session.Female') }}</x-radio>
          <x-radio id="other" name="gender" value="O">{{ __('session.Other') }}</x-radio>
        </div>
        <div class="w-full">
          <x-jet-label for="password" value="{{ __('auth.Password') }}" />
          <x-jet-input id="password" type="password" name="password" required />
        </div>
        <div class="w-full">
          <x-jet-label for="password_confirmation" value="{{ __('auth.Confirm_Password') }}" />
          <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required />
        </div>
      </div>

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
          <x-jet-label for="terms">
            <div class="flex items-center">
              <x-jet-checkbox name="terms" id="terms"/>

              <div class="ml-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}
              </div>
            </div>
          </x-jet-label>
        </div>
      @endif

      <div class="my-4 text-center">
        <x-jet-button>
          {{ __('auth.Register') }}
        </x-jet-button>
      </div>
    </form>

    <div class="w-full flex items-center justify-center">
      <x-link href="{{ route('login') }}" class="text-sm">
        {{ __('auth.Already_registered') }}
      </x-link>
    </div>
  </x-jet-authentication-card>
</x-guest-layout>

<script>
  (function() {
    'use strict';

    let phone = document.getElementById('phone');

    function formatTlf(e) {
      if ((this.value.length < 15) && ((e.keyCode > 47 && e.keyCode < 58) || (e.keyCode > 95 && e.keyCode < 106))) {
        this.value = this.value.replace(/\(?(\d{3})\)?\-?(\d{3})\-?/, '($1)-$2-');
      } else {
        this.value = this.value.slice(0, -1);
      }
    }

    phone.addEventListener('keyup', formatTlf);
  })();
</script>