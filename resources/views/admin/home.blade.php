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
                <img alt="EasyGroceries Logo" class="ml-4" height="40" src="{{ asset('images/easygroceries-logo.png') }}" width="40" />
                <span class="text-2xl font-bold text-green-600 ml-2">EasyGroceries</span>
            </div>
            <div class="relative flex items-center">
                <i class="fas fa-headset text-2xl"></i>
                <span class="ml-2">Toko 5A</span>
                <!-- Dropdown menu -->
                <div class="ml-4 relative">
                    <button class="flex items-center px-2 py-1 border rounded-md hover:bg-gray-200">
                        <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-gray-100" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-power-off"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </header>    
    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-6 flex-grow flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="{{ route('product.index') }}">
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                    <img alt="Manage Ingredients icon" class="h-16 mb-4" height="200"
                        src="{{ asset('/images/trolly.png') }}"
                        width="100" />
                    <span class="text-lg font-semibold text-gray-800">
                        Kelola Bahan
                    </span>
                </div>
            </a>
            <a href="{{ route('admin.riwayat') }}">
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                    <img alt="Order Notes icon" class="h-16 mb-4" height="100"
                        src="{{ asset('/images/list.png') }}"
                        width="100" />
                    <span class="text-lg font-semibold text-gray-800">
                        Pesanan
                    </span>
                </div>
            </a>
            <a href="{{ route('laporan') }}">
                <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                    <img alt="Report icon" class="h-16 mb-4" height="100"
                        src="{{ asset('/images/doc.png') }}"
                        width="100" />
                    <span class="text-lg font-semibold text-gray-800">
                        Laporan
                    </span>
                </div>
            </a>
            {{-- <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                <img alt="Customer icon" class="h-16 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/2Gp7FMxMgbI9E5XMNUMZegVbKVDW31XnKdYeXUbqJfJCWMunA.jpg"
                    width="100" />
                <span class="text-lg font-semibold text-gray-800">
                    Pelanggan
                </span>
            </div> --}}
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
</body>

</html>
