<x-jet-form-section submit="updateProfileInformation">
  <x-slot name="title">
    {{ __('session.Profile_Information') }}
  </x-slot>

  <x-slot name="description">
    {{ __('session.Profile_msg') }}
  </x-slot>

  <x-slot name="form">
    <!-- Profile Photo -->
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
      <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
        <!-- Profile Photo File Input -->
        <input type="file" class="hidden" wire:model="photo" x-ref="photo"
          x-on:change="
            photoName = $refs.photo.files[0].name;
            const reader = new FileReader();
            reader.onload = (e) => {
                photoPreview = e.target.result;
            };
            reader.readAsDataURL($refs.photo.files[0]);" />

        <x-jet-label for="photo" value="{{ __('Photo') }}" />

        <!-- Current Profile Photo -->
        <div class="mt-2" x-show="! photoPreview">
          <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
        </div>

        <!-- New Profile Photo Preview -->
        <div class="mt-2" x-show="photoPreview" style="display: none;">
          <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
              x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
          </span>
        </div>

        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
          {{ __('session.Select_Photo') }}
        </x-jet-secondary-button>

        @if ($this->user->profile_photo_path)
          <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
            {{ __('session.Remove_Photo') }}
          </x-jet-secondary-button>
        @endif

        <x-jet-input-error for="photo" class="mt-2" />
      </div>
    @endif

    <!-- First Name -->
    <div class="col-span-6 md:col-span-3">
      <x-jet-label for="first_name" value="{{ __('session.First_Name') }}" />
      <x-jet-input id="first_name" type="text" wire:model.defer="state.first_name" autocomplete="first_name" required />
      <x-jet-input-error for="first_name" class="mt-2" />
    </div>

    <!-- Last Name -->
    <div class="col-span-6 md:col-span-3">
      <x-jet-label for="last_name" value="{{ __('session.Last_Name') }}" />
      <x-jet-input id="last_name" type="text" wire:model.defer="state.last_name" required />
      <x-jet-input-error for="last_name" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="col-span-6 sm:col-span-4">
      <x-jet-label for="email" value="{{ __('Email') }}" />
      <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
      <x-jet-input-error for="email" class="mt-2" />

      @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
        <p class="text-sm mt-2">
          {{ __('Your email address is unverified.') }}

          <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900" wire:click.prevent="sendEmailVerification">
            {{ __('Click here to re-send the verification email.') }}
          </button>
        </p>

        @if ($this->verificationLinkSent)
          <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to your email address.') }}
          </p>
        @endif
      @endif
    </div>

    <!-- Phone -->
    <div class="col-span-6 md:col-span-3">
      <x-jet-label for="phone" value="{{ __('session.Phone') }}" />
      <x-jet-input id="phone" type="text" wire:model.defer="state.phone" pattern="^\(\d{3}\)-\d{3}-\d{4}$" />
      <x-jet-input-error for="phone" class="mt-2" />
    </div>

    <!-- Gender -->
    <div class="col-span-6">
      <div class="block font-medium text-sm text-gray-700 mb-2">{{ __('session.Gender') }}</div>
      <x-radio id="male" name="gender" value="M" checked="{{ (Auth::user()->gender == 'M') ? 'checked' : '' }}">
        {{ __('session.Male') }}
      </x-radio>
      <x-radio id="female" name="gender" value="F" checked="{{ (Auth::user()->gender == 'F') ? 'checked' : '' }}">
        {{ __('session.Female') }}
      </x-radio>
      <x-radio id="other" name="gender" value="O" checked="{{ (Auth::user()->gender == 'O') ? 'checked' : '' }}">
        {{ __('session.Other') }}
      </x-radio>
      <x-jet-input-error for="gender" class="mt-2" />
    </div>
  </x-slot>

  <x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
      {{ __('session.Profile_Saved') }}
    </x-jet-action-message>

    <x-jet-button wire:loading.attr="disabled" wire:target="photo">
      <i class="fas fa-fw fa-save"></i> {{ __('session.Save') }}
    </x-jet-button>
  </x-slot>
</x-jet-form-section>

@push('scripts')
  <script>
    (function() {
      'use strict';

      let phone = document.getElementById('phone');
      
      phone.addEventListener('keyup', phoneFormat);
    })();
  </script>
@endpush
