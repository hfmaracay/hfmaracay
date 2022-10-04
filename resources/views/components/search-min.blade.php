<div class="col-span-12 md:col-span-5">
  <x-jet-label for="search" value="Buscar" class="hidden" />
  <x-jet-input type="text" id="search" name="search" placeholder="Buscar..." value="{{ request('search') }}" />
</div>
<div class="col-span-12 md:col-span-3">
  <x-jet-label for="from" value="Desde" class="hidden" />
  <div class="relative flatpickrFrom">
    <input type="text" id="from" name="from" placeholder="Desde" value="{{ request('from') }}"
    class="w-full mt-1 border border-floreal-medium rounded-md shadow-sm focus:border-florealc-dark focus:ring focus:ring-florealc-medium focus:ring-opacity-50"
      readonly data-input />
    <a class="input-button cursor-pointer absolute right-0" title="toggle" data-toggle>
      <i class="fas fa-calendar p-3"></i>
    </a>
  </div>
</div>
<div class="col-span-12 md:col-span-3">
  <x-jet-label for="to" value="Hasta" class="hidden" />
  <div class="relative flatpickrTo">
    <input type="text" id="to" name="to" placeholder="Hasta" value="{{ request('to') }}"
      class="w-full mt-1 border border-floreal-medium rounded-md shadow-sm focus:border-florealc-dark focus:ring focus:ring-florealc-medium focus:ring-opacity-50"
      readonly data-input />
    <a class="input-button cursor-pointer absolute right-0" title="toggle" data-toggle>
      <i class="fas fa-calendar p-3"></i>
    </a>
  </div>
</div>
<div class="col-span-12 md:col-span-1">
  <x-jet-button class="mt-1 py-3">
    <i class="fas fa-search text-white"></i>
  </x-jet-button>
</div>
