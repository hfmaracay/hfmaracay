<td class="flex flex-row lg:table-cell">
  <div class="p-2 w-32 lg:hidden bg-floreal-medium font-semibold text-white text-sm leading-4 uppercase tracking-wider">
    {{ $title }}
  </div>
  <div {{ $attributes->merge(['class' => 'p-2']) }}>
    {{ $slot }}
  </div>
</td>