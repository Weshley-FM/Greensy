<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('carts'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $cart = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();

        if ($cart) {
            $cart->quantity += 1;
        } else {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $id;
            $cart->quantity = 1;
        }

        $cart->save();
        return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function removeFromCart($id)
    {
        Cart::where('id', $id)->where('user_id', Auth::id())->delete();
        return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
