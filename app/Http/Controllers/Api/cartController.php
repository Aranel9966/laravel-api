<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validazione dei dati di input
        $request->validate([
            'id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            // Altri campi di validazione se necessario
        ]);

        // Creazione del nuovo elemento del carrello
        $cartItem = new Cart();
        $cartItem->product_id = $request->input('product_id');
        // $cartItem->quantity = $request->input('quantity');
        // Altri campi se necessario
        $cartItem->save();

        return response()->json(['message' => 'Prodotto aggiunto al carrello']);
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return response()->json(['message' => 'Prodotto rimosso dal carrello']);
    }

    public function getCart()
    {
        $cartItems = Cart::all();

        return response()->json($cartItems);
    }
}
