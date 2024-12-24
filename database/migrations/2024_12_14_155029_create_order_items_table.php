<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // ID pesanan
            $table->unsignedBigInteger('product_id'); // ID produk
            $table->integer('quantity'); // Jumlah produk
            $table->decimal('price', 15, 2); // Harga satuan
            $table->decimal('subtotal', 15, 2); // Harga total untuk produk ini
            $table->timestamps();
    
            // Relasi ke tabel orders
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            // Relasi ke tabel products
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
