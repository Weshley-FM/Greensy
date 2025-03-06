<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Sayur - Greensy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-green-500 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Greensy</h1>
        <a href="/cart" class="bg-white text-green-500 px-4 py-2 rounded">Keranjang</a>
    </header>

    <div class="container mx-auto py-10 px-5">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Belanja Sayur</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/150' }}" class="w-full h-40 object-cover rounded">
                <h3 class="text-lg font-bold mt-2">{{ $product->name }}</h3>
                <p class="text-gray-600 text-sm">{{ $product->description }}</p>
                <p class="text-green-600 font-semibold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-3">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded w-full hover:bg-green-600">
                        Tambah ke Keranjang
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
