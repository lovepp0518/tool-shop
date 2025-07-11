@php
  use App\Models\Product;
  $products = Product::all();
@endphp

<x-app-layout>
  <div class="flex flex-col items-center min-h-screen bg-gray-400 justify-center bg-[url('/public/images/background.jpg')] bg-cover bg-center">
    <div class="relative w-[650px] h-[650px]">
      <img src="{{ asset('images/logo.png') }}" />
    </div>
    <div class="flex gap-12">
      @foreach ($products as $product)
        <button class="w-64 bg-white rounded-lg py-4 text-2xl flex items-center justify-center shadow hover:bg-gray-100 transition">
          <a href="{{ route('order.create', ['product' => $product]) }}">
            購買{{ $product->name }}
          </a>
        </button>
      @endforeach
    </div>
  </div>
</x-app-layout>