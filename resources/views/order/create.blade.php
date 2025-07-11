<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('建立訂單') }}
    </h2>
</x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="max-w-xl">
                  <form method="post" action="{{ route('order.store', $product) }}">
                    @csrf
                    <span>我想要購買</span>
                    <input
                      name="quantity"
                      type="number"
                      value="1"
                      min="1"
                      max="10"
                      class="w-16 text-center bg-gray-100 text-black py-1 px-2 rounded border-none focus:outline-none"
                    />
                    <span>張{{ $product->name }}</span>
                    <br>
                    <button
                      type="submit"
                      class="bg-blue-600 text-white font-semibold py-1 px-4 rounded shadow"
                    >
                      結帳
                    </button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>