<div class="my-4 px-4 py-2 border-2 border-green-600 bg-green-200 rounded-md font-medium text-green-600"
  {{ !session()->has('message') ? 'hidden' : '' }}>
  {{ session()->has('message') ? session()->get('message') : '' }}
</div>
