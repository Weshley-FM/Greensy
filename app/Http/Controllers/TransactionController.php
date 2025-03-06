<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout()
    {
        $carts = cart::where('user_id', Auth::id())->get();

        if ($carts->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja kosong.');
        }

        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);
            $product->stock -= $cart->quantity;
            $product->save();
        }

        Cart::where('user_id', Auth::id())->delete();
        return redirect()->route('cart.index')->with('success', 'Transaksi berhasil!');
    }
}
