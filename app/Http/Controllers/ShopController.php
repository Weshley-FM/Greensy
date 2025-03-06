<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('shop', compact('products'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        // Simpan data produk ke sesi sebagai contoh (bisa menggunakan database untuk fitur lebih kompleks)
        $cart = session()->get('cart', []);
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => isset($cart[$id]) ? $cart[$id]['quantity'] + 1 : 1
        ];
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }
}
