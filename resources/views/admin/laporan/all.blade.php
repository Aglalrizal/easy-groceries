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
    <main class="p-4">
        <section>
            <h2 class="text-xl font-bold">
                Penjualan 
            </h2>
            <div class="flex flex-wrap justify-center mt-4 space-x-4">
                <div class="flex items-center p-4 bg-green-100 rounded-lg shadow-md">
                    <div>
                        <p class="text-2xl font-bold">
                            Rp{{ number_format($totalAmount)}}
                        </p>
                        <p>
                            Total Pemasukan
                        </p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-green-100 rounded-lg shadow-md">
                    <div>
                        <p class="text-2xl font-bold">
                            {{ $totalProducts }} Produk
                        </p>
                        <p>
                            Total Pesanan
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-8">
            <h2 class="text-xl font-bold">
                Laporan
            </h2>
            <table class="w-full mt-4 border-collapse">
                <thead>
                    <tr class="bg-green-100">
                        <th class="p-2 text-left">
                            No
                        </th>
                        <th class="p-2 text-left">
                            Nama produk
                        </th>
                        <th class="p-2 text-left">
                            Stok Tersedia
                        </th>
                        <th class="p-2 text-left">
                            Terjual
                        </th>
                        <th class="p-2 text-left">
                            Total Penjualan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productSales as $item)
                    <tr class="border-t">
                        <td class="p-2">
                            {{ $loop->iteration }}
                        </td>
                        <td class="p-2">
                            {{ $item['name'] }}
                        </td>
                        <td class="p-2">
                            {{ $item['stock'] }}
                        </td>
                        <td class="p-2">
                            {{ $item['sold'] }}
                        </td>
                        <td class="p-2">
                            Rp. {{ number_format($item['total_sales']) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
