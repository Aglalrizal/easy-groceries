<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::where("user_id", Auth::user()->id)->with('product')->get();
        return view("user.cart", compact("cart"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cartItem = Cart::where('user_id', Auth::user()->id)
        ->where('product_id', $request->product_id)
        ->first();

        if ($cartItem) {
            $cartItem->qty += $request->input('qty', $request->qty); // Tambahkan qty dari input atau default 1
            $cartItem->save();
        } else {
            // Jika barang belum ada, buat entri baru
            Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => $request->qty, // Default qty 1 jika tidak diinput
            ]);
        }
        return redirect(route('belanja'))->with('success','Berhasil menambahkan item ke keranjang');
    }
    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $cartItem = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
        if($request->qty <= 0){
            return $this->destroy($cartItem);
        }else{
            $cartItem->qty = $request->qty;
            $cartItem->save();
            return redirect(route('cart'))->with('success','Berhasil merubah jumlah item di keranjang');
        }       
    }
        /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect(route('cart'))->with('success','Item berhasil dihapus');
    }
    public function delete($id){
        $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $id)->first();
        $cart->delete();
        return redirect(route('cart'))->with('success','Item berhasil dihapus');
    }
}
