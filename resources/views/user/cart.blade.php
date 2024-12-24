<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        EasyGroceries
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <a href="{{ route('user.home') }}">
                    <i class="fas fa-arrow-left text-2xl">
                    </i>
                </a>
                <img alt="EasyGroceries Logo" class="ml-4" height="40"
                    src="{{ asset('images/easygroceries-logo.png') }}" width="40" />
                <span class="text-2xl font-bold text-green-600 ml-2">
                    EasyGroceries
                </span>
            </div>
            <div class="flex items-center">
                <a href="{{ route('cart') }}">
                    <i class="fas fa-shopping-cart text-2xl ml-6">
                    </i>
                </a>
                <i class="fas fa-user text-2xl ml-6">
                </i>
                <span class="ml-2">
                    {{ @Auth::user()->name }}
                </span>
                <div class="ml-4 relative">
                    <button class="flex items-center px-2 py-1 border rounded-md hover:bg-gray-200">
                        <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-gray-100"
                            onclick="return confirm('Are you sure?')">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto py-8 px-6">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <h2 class="text-2xl font-bold mb-4">Keranjang Saya</h2>
        <form action="/checkout" method="POST">
            @csrf
            <div class="flex flex-col lg:flex-row">
                <div class="flex-1">
                    @foreach($cart as $item)
                        <div class="bg-white p-4 rounded-lg shadow-md mb-4 flex items-center" data-product-id="{{ $item->product->id }}" data-price="{{ $item->product->price }}">
                            <img alt="{{ $item->product->name}}" class="w-20 h-20 mx-4" height="100"
                                src="{{ asset('images/products/'.$item->product->image) }}" width="100" />
                            <div class="flex-1">
                                <h3 class="text-lg font-bold">{{ $item->product->name}}</h3>
                                <p>Rp. <span class="product-price">{{ number_format($item->product->price) }}</span>/ <span id="{{ $item->product->slug }}-unit">{{ $item->product->unit }}</span></p>
                            </div>
                            <!-- Input quantity untuk setiap produk -->
                            <input type="number" name="items[{{ $item->product->id }}]" value="{{ $item->qty }}" min="1" class="w-12 text-center border border-gray-300 py-1 product-qty" />
                            {{-- <form action="{{ "cart/delete/".$item->product->id }}" method="post" class="flex m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded ms-3"
                                    onclick='return confirm("Apakah kamu yakin ingin menghapus item ini?")'>Hapus</button>
                            </form> --}}
                        </div>
                    @endforeach
                </div>
            </div>
        
            <!-- Alamat Pengiriman -->
            <div class="mb-4">
                <label for="shipping_address" class="block text-sm font-medium text-gray-700">Alamat Pengiriman</label>
                <input type="text" id="shipping_address" name="shipping_address" required
                    class="w-full border border-gray-300 py-2 px-4 rounded mt-2" placeholder="Masukkan alamat pengiriman" value="{{ old('shipping_address', @Auth::user()->address ?? '') }}"/>
            </div>
        
            <!-- Metode Pembayaran (Hanya COD) -->
            <div class="mb-4">
                <label for="payment_method" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                <select id="payment_method" name="payment_method" disabled class="w-full border border-gray-300 py-2 px-4 rounded mt-2">
                    <option value="cod" selected>Cash on Delivery (COD)</option>
                </select>
            </div>
        
            <!-- Total Pembayaran -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Total Pembayaran</label>
                <p id="total_payment" class="text-lg font-bold text-green-600 mt-2">
                    Rp. 0
                </p>
                <input type="hidden" id="total_payment_hidden" name="total_payment" value="0" />
            </div>
        
            <div class="flex justify-between mt-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Checkout</button>
            </div>
        </form>        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        // Fungsi untuk menghitung total pembayaran
        function calculateTotal() {
            let total = 0;
            // Ambil semua produk di keranjang
            document.querySelectorAll('.product-qty').forEach(function(input) {
                const qty = parseInt(input.value);
                const price = parseInt(input.closest('.flex').getAttribute('data-price'));
                total += qty * price;
            });
            // Tampilkan total pembayaran
            document.getElementById('total_payment_hidden').value = total;
            document.getElementById('total_payment').textContent = "Rp. " + total.toLocaleString();
        }

        // Menghitung total saat halaman dimuat atau saat jumlah produk berubah
        document.addEventListener('DOMContentLoaded', calculateTotal);
        document.querySelectorAll('.product-qty').forEach(function(input) {
            input.addEventListener('input', calculateTotal);
        });
    </script>
</body>

</html>
