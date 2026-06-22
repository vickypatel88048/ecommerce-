<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }
        else
        {
            $cart[$id] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->back()
            ->with('success', 'Product Added To Cart Successfully');
    }

    public function increase($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function decrease($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id]) && $cart[$id]['quantity'] > 1)
        {
            $cart[$id]['quantity']--;
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function checkout()
    {
        return view('checkout');
    }
}