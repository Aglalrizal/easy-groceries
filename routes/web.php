<?php

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;


Route::get('/', [AuthController::class,'home']);
Route::get('/login', function () {
    return view('login');
});
Route::resource('product', ProductController::class);
Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home'); 
Route::get('user/home', function () {
    return view('user.home');
});
Route::get('vendor/home', function () {
    return view('vendor.home');
})->name('user.home'); 
Route::get('/daftar', function () {
    return view('admin.order.all');
})->name('daftar'); 
Route::get('/detail', function () {
    return view('admin.order.detail');
})->name('detail');;
Route::get('/laporan', function () {
    $totalAmount = Order::where('status', 'completed')->sum('total_amount');  // Menjumlahkan total_amount dari semua pesanan yang diterima
    $totalProducts = Order::where('status', 'completed')
    ->with('items')  // Pastikan Anda meng-include relasi items
    ->get()
    ->sum(function($order) {
        return $order->items->sum('quantity');  // Menjumlahkan kuantitas dari setiap item dalam setiap pesanan
    });
    $products = Product::withCount('orderItems') // Ambil semua produk beserta jumlah orderItem-nya
    ->get();

    $productSales = $products->map(function ($product) {
        // Filter orderItems yang terkait dengan status order 'completed'
        $completedOrderItems = $product->orderItems->filter(function ($item) {
            return $item->order->status == 'completed';  // Pastikan order terkait memiliki status 'completed'
        });

        $totalSold = $completedOrderItems->sum('quantity');  // Hitung total yang terjual berdasarkan order yang completed
        $totalAmountItem = $completedOrderItems->sum(function ($item) {
            return $item->quantity * $item->price;  // Hitung total penjualan berdasarkan order yang completed
        });

        return [
            'name' => $product->name,
            'stock' => $product->stock,  // Misalkan 'stock' adalah atribut yang menyimpan stok produk
            'sold' => $totalSold,
            'total_sales' => $totalAmountItem
        ];
    });

    //dd($totalProducts, $totalAmount, $productSales);
    return view('admin.laporan.all',[
        'productSales' => $productSales,
        'totalAmount' => $totalAmount,
        'totalProducts' => $totalProducts
    ]);
})->name('laporan');;
Route::get('/laporan-detail', function () {
    return view('admin.laporan.detail');
})->name('laporan-detail');
Route::get('user-home', function () {
    return view('user.home');
})->name('user.home');
Route::get('belanja', function () {
    $products = Product::all();
    return view('user.belanja', compact('products'));
})->name('belanja');
Route::post('/cart/add/{id}', [CartController::class, 'store']);
Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('update');
Route::delete('/cart/delete/{id}', [CartController::class, 'delete'])->name('delete');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('daftar');
Route::get('/community', function(){
    return view('user.community');
})->name('community');
Route::get('/info', function(){
    return view('user.info');
})->name('info');
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/riwayat', [OrderController::class,'getOrderHistory'])->name('riwayat');
Route::get('/riwayat/{id}', [OrderController::class,'getOrderHistoryDetail'])->name('riwayat.detail');
Route::get('admin/riwayat', [OrderController::class,'getAdminOrderHistory'])->name('admin.riwayat');
Route::get('history/{id}', [OrderController::class,'getAdminOrderHistoryDetail'])->name('admin.riwayat.detail');
Route::patch('update/{id}', [OrderController::class,'updateStatus'])->name('admin.updateStatus');