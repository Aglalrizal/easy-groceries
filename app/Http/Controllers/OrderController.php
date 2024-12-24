<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        //dd($request);
        $cartItems = $request->items;

        $totalAmount = (int) $request->total_payment;
        $data['user_id'] = $request->user()->id;
        $data['total_amount'] = $totalAmount;
        $data['address'] = $request->shipping_address;
        $data['status'] = 'pending';
        // Simpan ke tabel orders
        $order = Order::create($data);

    // Simpan data order_items (tabel order_items)
    foreach ($request->items as $productId => $quantity) {
        // Pastikan produk tersedia di keranjang atau memiliki ID yang valid
        $product = Product::find($productId);
        if ($product) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => (int) $quantity,
                'price' => (int) $product->price, // Ambil harga produk
                'subtotal' => (int) $product->price * (int) $quantity,
            ]);
        }
    }
        $cart = Cart::where('user_id', Auth::user()->id);
        $cart->delete();
        return redirect()->route('riwayat')->with('success','Order berhasil');
    }
    public function getOrderHistory(){
        $orders = Order::where('user_id',Auth::user()->id)->get();
        return view('user.riwayat.index', compact('orders'));
    }

    public function getOrderHistoryDetail($id){
        $order = Order::where('id', $id)->first();
        //dd($order);
        $items = OrderItem::where('order_id', $id)->get();
        return view('user.riwayat.show', compact('order', 'items'));
    }
    public function getAdminOrderHistory(){
        $orders = Order::all();
        return view('admin.riwayat.index', compact('orders'));
    }

    public function getAdminOrderHistoryDetail($id){
        $order = Order::where('id', $id)->first();
        //dd($order);
        $items = OrderItem::where('order_id', $id)->get();
        return view('admin.riwayat.show', compact('order', 'items'));
    }

    public function updateStatus(Request $request, $id)
    {
        //dd($request);
        // Validasi input status
        $request->validate([
            'status' => 'required|string|in:pending,approved,beingDelivered,completed',
        ]);
        $order = Order::find($id, 'id');
        $order->load('items');
        // Cek jika status berubah menjadi Accepted
        if ($request->status === 'approved') {
            // Mengurangi stok untuk setiap item dalam pesanan
            foreach ($order->items as $item) {
                $product = $item->product;
                $product->stock -= $item->quantity;  // Mengurangi stok sesuai jumlah pesanan
                $product->save();
            }
        }

        // Update status pesanan
        $order->status = $request->status;
        $order->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui dan stok telah diperbarui!');
    }
}
