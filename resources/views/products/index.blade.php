@extends('dashboard')

@section('content')
  <div class="text-white p-5">
      <h1 class="font-semibold text-xl">Products</h1>
  </div>
  <div>
    @foreach ($products as $product)
        <div class="text-white p-5 bg-gray-700 rounded-md mx-auto w-[800px] mb-5">
            <h2 class="font-semibold text-xl">{{ $product->name }}</h2>
            
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="bg-gray-800 p-3 rounded-lg">
                    <p class="font-medium mb-2">Descrizione:</p>
                    <div class="text-gray-300">
                        {{ $product->description }}
                    </div>
                </div>

                <div class="bg-gray-800 p-3 rounded-lg">
                    <p class="font-medium mb-2">Prezzo:</p>
                    <div class="text-gray-300">
                        {{ $product->price }}
                    </div>
                </div>

                <div class="bg-gray-800 p-3 rounded-lg">
                    <p class="font-medium mb-2">Likes:</p>
                    <div class="text-gray-300">
                        {{ $product->likes }}
                        <i class="fa-solid fa-thumbs-up"></i>
                    </div>
                </div>

                <div class="bg-gray-800 p-3 rounded-lg">
                    <div class="flex justify-between">
                        <div>
                            <p class="font-medium mb-2">Status:</p>
                            <div class="text-gray-300">
                                {{ $product->published ? 'Published' : 'Not Published' }}
                            </div>
                        </div>
                        <div>
                            <p class="font-medium mb-2">Data Creazione:</p>
                            <div class="text-gray-300">
                                {{ $product->created_at }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
  </div>
@endsection
