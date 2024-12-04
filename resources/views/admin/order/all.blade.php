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
                <i class="fas fa-headset text-2xl">
                </i>
                <span class="ml-2">
                    Toko 5A
                </span>
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
    <main class="container mx-auto mt-8 px-6 flex-grow">
        <h1 class="text-2xl font-bold mb-4">Catatan Pesanan</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead class="bg-green-100">
                    <tr>
                        <th class="py-2 px-4 text-left">No. Order</th>
                        <th class="py-2 px-4 text-left">Nama</th>
                        <th class="py-2 px-4 text-left">Tanggal</th>
                        <th class="py-2 px-4 text-left">Harga</th>
                        <th class="py-2 px-4 text-left text-center">Detail Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">01</td>
                        <td class="py-2 px-4">Azzahra</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.145.000</td>
                        <td class="py-2 px-4 text-center"><a href="{{ route('detail') }}"><i
                                    class="fas fa-ellipsis-h text-green-600"></i></a></td>
                    </tr>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">02</td>
                        <td class="py-2 px-4">Legira Putri</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.67.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">03</td>
                        <td class="py-2 px-4">Dwika Jaya</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.75.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">04</td>
                        <td class="py-2 px-4">Rahma</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.32.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">05</td>
                        <td class="py-2 px-4">Dzaki Syauqi</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.117.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">06</td>
                        <td class="py-2 px-4">Reza</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.145.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">07</td>
                        <td class="py-2 px-4">Amira</td>
                        <td class="py-2 px-4">07/11/24</td>
                        <td class="py-2 px-4">Rp.75.000</td>
                        <td class="py-2 px-4 text-center"><i class="fas fa-ellipsis-h"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
