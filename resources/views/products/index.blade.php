@extends('dashboard')

@section('content')
  <div class="text-white p-5">
      <h1 class="font-semibold text-xl">Products</h1>
  </div>
  <div>
    @foreach ($products as $product)
        <div class="text-white p-5">
            <h2 class="font-semibold text-xl">{{ $product->name }}</h2>
        </div>
    @endforeach
  </div>
@endsection
