<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        EasyGroceries
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
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
                {{-- <div class="relative">
                    <input class="border border-green-500 rounded-full py-2 px-4 pl-10 focus:outline-none"
                        placeholder="Cari..." type="text" />
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-green-500">
                    </i>
                </div> --}}
                <i class="fas fa-headset text-2xl ml-6">
                </i>
                <span class="ml-2">
                    Toko 5A
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
    <main class="container mx-auto mt-8 px-6 flex-grow">
        <h2 class="text-2xl font-bold mb-6">
            {{ isset($product) ? "Edit" : "Tambah" }} Data
        </h2>
        <div class="flex flex-col md:flex-row">
            <!-- Form Section -->
            <form class="md:w-full flex flex-col md:flex-row"
                action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($product))
                @method('PUT')
                @endif
                <!-- Image Upload Section -->
                <div class="flex flex-col items-center md:w-1/3 mb-6 md:mb-0">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                        Masukkan gambar
                    </label>
                    @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="w-48 h-48 bg-gray-200 flex items-center justify-center rounded-lg">
                        <img id="preview" alt="Placeholder for product image upload" class="w-24 h-24" height="150" src="{{ 
            isset($product) ? asset('images/products/'.$product->image) : asset('images/easygroceries-logo.png')}}"
                            width="150" />
                    </div>
                    <input class="mt-4" id="image" name="image" type="file" onchange="previewImage()" />
                </div>
                <div class="md:w-2/3 md:ml-6">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Nama produk
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" placeholder="Masukkan nama produk Anda" type="text"
                            value="{{ old('name', $product->name ?? "") }}" />
                        @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                            Harga
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="price" name="price" placeholder="Masukkan harga produk Anda" type="number"
                            value="{{ old('price', $product->price ?? "") }}" />
                        @error('price')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex mb-4">
                        <div class="w-1/2 pr-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                                Stok
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="stock" name="stock" type="number"
                                value="{{ old('stock', $product->stock ?? 1)   }}" />
                            @error('stock')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-1/2 pr-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="stock">
                                Satuan
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="unit" name="unit"
                                value="{{ old('unit', $product->unit ?? "Buah")   }}" />
                            @error('unit')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="w-1/2 pl-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="unit" name="unit">
                                Satuan
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="unit" name="unit" onchange="toggleOtherUnitInput()">
                                <option value="Buah" {{ old('unit', $product->unit ?? 'Buah') == 'Buah' ? 'selected' : '' }}>Buah</option>
                                <option value="Ikat" {{ old('unit', $product->unit ?? 'Buah') == 'Ikat' ? 'selected' : '' }}>Ikat</option>
                                <option value="Kg" {{ old('unit', $product->unit ?? 'Buah') == 'Kg' ? 'selected' : '' }}>Kg</option>
                                <option value="Lt" {{ old('unit', $product->unit ?? 'Buah') == 'Lt' ? 'selected' : '' }}>Lt</option>
                                <option value="Other" {{ old('unit', $product->unit ?? 'Buah') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        
                            <div id="otherUnitDiv" style="display: {{ old('unit', $product->unit ?? 'Buah') == 'Other' ? 'block' : 'none' }};">
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="otherUnit" name="unit" type="text" value="{{ old('unit', $product->unit ?? '') }}" />
                            </div>
                        
                            @error('unit')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}
                    </div>
                    <div class="flex justify-center">
                        <button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-green-100 py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <h2 class="text-xl font-bold">
                    EasyGroceries
                </h2>
                <p>
                    © 2024 PT. Segar Jaya. All Rights Reserved
                </p>
            </div>
            <div class="flex space-x-4">
                <a class="text-gray-700" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
                <a class="text-gray-700" href="#">
                    <i class="fab fa-facebook">
                    </i>
                </a>
                <a class="text-gray-700" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a class="text-gray-700" href="#">
                    <i class="fab fa-youtube">
                    </i>
                </a>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script>
        function previewImage() {
            const input = document.getElementById('image');
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]); // Membaca file gambar sebagai URL Data
            }
        }
        function toggleOtherUnitInput() {
            var select = document.getElementById("unit");
            var otherUnitDiv = document.getElementById("otherUnitDiv");

            if (select.value == "Other") {
                otherUnitDiv.style.display = "block";
            } else {
                otherUnitDiv.style.display = "none";
            }
        }
    </script>
</body>

</html>
