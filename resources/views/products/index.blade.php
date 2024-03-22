<x-app-layout>

  <x-container class="py-12">
    
    <div class="grid grid-cols-3 gap-6">
      @foreach ($products as $product)
        
        <div class="bg-white rounded shadow-lg">
          <div class="h-56 bg-cover bg-center p-4"
            style="background-image: url({{$product->image}})">
            <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
              {{$product->price}} USD
            </span>
          </div>
          <div class="px-6 py-4">
            <h1 class="text-gray-900 font-semibold text-xl uppercase">
              {{ $product->title}}
            </h1>
            <p>
              {{ Str::limit($product->description, 100)}}
            </p>
          </div>
        </div>

      @endforeach
    </div>

  </x-container>

</x-app-layout>