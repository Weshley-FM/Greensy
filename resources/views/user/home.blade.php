@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Daftar Sayuran Segar</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="card-text">Stok: {{ $product->stock }}</p>
                            <form action="{{ route('cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-success">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
