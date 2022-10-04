<table class="my-3 w-full rounded-lg overflow-hidden shadow-lg">
  <thead class="bg-floreal-medium text-floreal-dark">
    <tr class="hidden lg:table-row text-sm leading-4 uppercase tracking-wider">
      {{ $tableCols }}
    </tr>
  </thead>
  @if ($isNotEmpty == '1')
    <tbody class="w-full flex-1 sm:flex-none bg-white divide-y divide-gray-400 text-sm leading-5">
      {{ $tableRows }}
    </tbody>
  @endif
</table>