<label for="image" class="block md:col-span-2 grid gap-3 grid-cols-1 md:grid-cols-2 bg-white border-2 border-floreal-medium border-dashed cursor-pointer rounded-md p-4">
  <div class="flex justify-center items-center">
    <img id="preview" src="{{ asset($image) }}" alt="{{ $title }}" title="{{ $title }}" class="h-32 rounded-md" />
  </div>
  <div class="flex justify-center items-center">
    <div class="text-center">
      <p>Cargar Imagen</p>
      <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
      <input id="image" type="file" name="image" class="sr-only" />
    </div>
  </div>
</label>