<label for="{{ $id }}" class="inline-flex items-center cursor-pointer mb-2 mr-2">
  <input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" 
    wire:model.defer="state.{{ $name }}" 
    {!! $attributes->merge(['class' => 'form-radio w-5 h-5 text-sm border border-[#afafaf] text-hfred shadow-sm focus:outline-none focus:border-hfred focus:ring focus:ring-red-200 focus:ring-opacity-50']) !!} />
  <span class="ml-2 font-medium text-gray-900">{{ $slot }}</span>
</label>
