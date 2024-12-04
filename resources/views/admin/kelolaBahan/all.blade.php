<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        EasyGroceries
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
                <a href="{{ route('admin.home') }}">
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
                <i class="fas fa-headset text-2xl">
                </i>
                <span class="ml-2">
                    Toko 5A
                </span>
            </div>
        </div>
    </header>
    <main class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">
                Kelola Bahan
            </h1>
            <a href="{{ route('product.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md">
                Tambah
            </a>
        </div>
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($products as $product)
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="{{ $product->name }}" class="mx-auto mb-4" height="150"
                    src={{ asset('images/products/'.$product->image) }} width="200" />
                <h2 class="text-xl font-bold text-center">
                    {{ $product->name }}
                </h2>
                <h3 class="text-l font-bold text-center">
                    Rp. {{ $product->price }}
                </h3>
                <p class="text-center">
                    Stok:
                    <span class="font-bold">
                        {{ $product->stock }} {{ $product->unit }}
                    </span>
                </p>
                <div class="flex justify-center items-center mt-4">
                    <!-- Tombol Edit -->
                    <a href="{{ route('product.edit', $product->id) }}"
                        class="bg-yellow-300 text-black px-4 py-2 me-2 rounded-md shadow-md flex justify-center items-center">
                        Edit
                    </a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="inline-block mt-3"
                        onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border border-red-500 text-red-500 px-4 py-2 rounded-md shadow-md">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
