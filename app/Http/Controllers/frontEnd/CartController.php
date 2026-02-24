<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\superAdmin\Utility;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $shipping = 300; // or calculate dynamically
        $total = $subtotal + $shipping;

        return view('frontEnd.cart.index',compact('cart','subtotal','total','shipping'));

    }

    public function add(Request $request)
    {
        $service = Utility::findOrFail($request->id);
        $cart = session()->get('cart', []);



        if (isset($cart[$service->id])) {
            $cart[$service->id]['quantity'] += $request->quantity;
        } else {
            $cart[$service->id] = [
                "name" => $service->name,
                "price" => $service->price,
                "quantity" => $request->quantity,
                "image"    => $service->path, 

            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Service added to cart!');
    }

    // CartController.php
public function update(Request $request, $id)
{
    $cart = session()->get('cart', []);
    if(isset($cart[$id])) {
        $cart[$id]['quantity'] = max(1, (int)$request->quantity);
        session()->put('cart', $cart);
    }
    return redirect()->back()->with('success', 'Cart Updated successfully!');
}


   // Update all quantities
public function updateAll(Request $request)
{
    $cart = session()->get('cart', []);

    if ($request->has('quantity')) {
        foreach ($request->quantity as $id => $qty) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = max(1, (int) $qty); // ensure at least 1
            }
        }
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.index')->with('success', 'All cart items updated successfully!');
}


// Remove item
public function remove($id)
{
    $cart = session()->get('cart', []);
    if(isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->back()->with('success', 'Item Removed Successfully!');
}

}
