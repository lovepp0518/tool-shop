<x-app-layout>
  <div class="flex flex-col items-center min-h-screen bg-gray-400 justify-center bg-[url('/public/images/background.jpg')] bg-cover bg-center">
    <div class="relative w-[650px] h-[650px]">
      <img src="{{ asset('images/logo.png') }}" />
    </div>
    <div class="flex gap-12">
      <button class="w-48 bg-white rounded-lg py-4 text-2xl flex items-center justify-center shadow hover:bg-gray-100 transition">
        Try it
      </button>
      <button class="w-48 bg-white rounded-lg py-4 text-2xl flex items-center justify-center shadow hover:bg-gray-100 transition">
        Buy it
      </button>
    </div>
  </div>
</x-app-layout>