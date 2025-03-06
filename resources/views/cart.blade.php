@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Keranjang Belanja</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4">{{ session('success') }}</div>
    @endif

    @if($carts->isEmpty())
        <p class="text-gray-600">Keranjang belanja kosong.</p>
    @else
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                    <th class="border border-gray-300 px-4 py-2">Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Total</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $cart->product->name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $cart->quantity }}</td>
                    <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($cart->product->price, 0, ',', '.') }}</td>
                    <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($cart->product->price * $cart->quantity, 0, ',', '.') }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form action="{{ route('cart.remove', $cart->id) }}" method="POST">
                            @csrf
                            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('checkout') }}" method="POST" class="mt-4">
            @csrf
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Checkout</button>
        </form>
    @endif
</div>
@endsection
