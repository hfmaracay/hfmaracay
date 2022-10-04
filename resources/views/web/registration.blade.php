<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('auth.Register') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
          @if ($registration)
            <div class="w-full lg:w-max rounded-xl md:flex justify-between border border-hfgray">
              <div class="md:max-w-xs lg:max-w-sm">
                <img src="{{ asset($event->urlImage) }}" alt="Meetup 35" title="Meetup 35" class="mx-auto rounded-l-xl lg:mr-auto" />
              </div>
              <div class="md:max-w-xs lg:max-w-lg w-full p-10 lg:px-16 lg:py-10 rounded-r-xl">
                <p class="my-4 lg:hidden">{{ $event->resume }}</p>
                <div class="hidden lg:block">{!! $event->description !!}</div>
                <div class="text-sm text-green-600 bg-green-200 px-2 py-1 my-2">
                  Tú estás registrado en éste evento. ¡Te esperamos!
                </div>
              </div>
            </div>
          @else
            <div class="text-sm text-green-600 bg-green-200 px-2 py-1 my-2 {{ !session()->has('message') ? 'hidden' : '' }}">
              {{ session()->has('message') ? session()->get('message') : '' }}
            </div>
            @if ($errors->any())
              <div class="text-sm text-red-600 bg-red-200 px-2 py-1 my-2">
                <ul class="list-disc list-inside">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form id="form-registration" name="form-registration" method="POST" action="{{ route('registrations.store') }}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" id="event" name="event" value="3" />
              <h3 class="font-semibold mb-4 text-2xl md:text-[26px]">
                Meetup 35: Tus Skills
              </h3>
              <p>Nuestro networking tiene un cover de 4$USD e incluye la primera bebida.</p>
              <p>Pago móvil: Banesco (0134), Número de teléfono: (0424) 317.21.26, Cédula: 17.570.157.</p>
              <div class="grid gap-4 grid-cols-1 md:grid-cols-2 mt-6">
                <div class="w-full">
                  <div class="w-full mb-4">
                    <div class="block font-semibold text-sm text-dark mb-2">¿Cuál es tu perfil? (Puedes seleccionar varios)</div>
                    @if ($profiles->isNotEmpty())
                      @foreach ($profiles as $profile)
                        <label for="profile{{ $profile->id }}" class="flex items-center">
                          <x-jet-checkbox id="profile{{ $profile->id }}" name="profiles[]" value="{{ $profile->id }}" />
                          <span class="ml-2 text-sm">{{ $profile->name }}</span>
                        </label>
                      @endforeach
                    @endif
                  </div>
                  <div class="w-full mb-4">
                    <div class="block font-semibold text-sm text-dark mb-2">¿Qué bebida prefieres?</div>
                    <x-radio id="coffee" name="drink" value="coffee">Café</x-radio>
                    <x-radio id="beer" name="drink" value="beer">Cerveza</x-radio>
                    @error('drink')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="w-full">
                  <div class="block font-semibold text-sm text-dark mb-2">Datos Pago móvil</div>
                  <div class="w-full mb-4">
                    <x-jet-label for="bank" value="Banco" />
                    <x-jet-input type="text" id="bank" name="bank" :value="old('bank')" required />
                    @error('bank')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="w-full mb-4">
                    <x-jet-label for="date" value="Fecha" />
                    <div class="relative flatpickr">
                      <input type="text" id="date" name="date" value="{{ old('date') }}"
                      class="w-full border-0 border-b border-[#afafaf] focus:border-hfred focus:outline-none focus:ring focus:ring-red-200 py-2" readonly data-input required />
                      <a class="input-button cursor-pointer absolute right-0" title="toggle" data-toggle>
                        <i class="fas fa-calendar p-3"></i>
                      </a>
                    </div>
                    @error('date')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="w-full mb-4">
                    <x-jet-label for="reference" value="Referencia" />
                    <x-jet-input type="text" id="reference" name="reference" :value="old('reference')" required />
                    @error('reference')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="w-full mb-4">
                    <x-jet-label for="amount" value="Monto" />
                    <x-jet-input type="number" id="amount" name="amount" min="0" step="0.01" :value="old('amount')" required />
                    @error('amount')
                      <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="w-full mb-4">
                    <x-jet-label for="description" value="Información adicional" />
                    <textarea id="description" name="description" rows="3" placeholder="" class="w-full border-0 border-b border-[#afafaf] focus:border-hfred focus:outline-none focus:ring focus:ring-red-200 py-2 resize-none">{{ old('description') }}</textarea>
                  </div>
                </div>
                <div class="w-full md:col-span-2 text-center">
                  <x-jet-button>
                    {{ __('auth.Register') }}
                  </x-jet-button>
                </div>
              </div>
            </form>
          @endif
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
    <script>
      (function() {
        'use strict';

        let datePicker = flatpickr(".flatpickr", {
          dateFormat: "d/m/Y",
          wrap: true,
          disableMobile: true,
          locale: "es",
          maxDate: "today"
        });
      })();
    </script>
  @endpush
</x-app-layout>
