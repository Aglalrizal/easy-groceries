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
            </div>
        </div>
    </header>
    <main class="p-4">
        <section>
            <h2 class="text-xl font-bold">
                Laporan
            </h2>
            <p class="text-lg">
                November 2024
            </p>
            <div class="flex flex-wrap justify-center mt-4 space-x-4">
                <div class="flex items-center p-4 bg-green-100 rounded-lg shadow-md">
                    <div>
                        <p class="text-2xl font-bold">
                            Rp45.000.000
                        </p>
                        <p>
                            Total Pemasukan
                        </p>
                    </div>
                    <div class="ml-4 p-2 bg-yellow-200 rounded-full">
                        <p class="text-xl font-bold">
                            +50%
                        </p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-green-100 rounded-lg shadow-md">
                    <div>
                        <p class="text-2xl font-bold">
                            5000 Produk
                        </p>
                        <p>
                            Total Pesanan
                        </p>
                    </div>
                    <div class="ml-4 p-2 bg-yellow-200 rounded-full">
                        <p class="text-xl font-bold">
                            +42%
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
                            Total stok
                        </th>
                        <th class="p-2 text-left">
                            Satuan
                        </th>
                        <th class="p-2 text-left">
                            Detail
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-2">
                            01
                        </td>
                        <td class="p-2">
                            Wortel
                        </td>
                        <td class="p-2">
                            46
                        </td>
                        <td class="p-2">
                            Buah
                        </td>
                        <td class="p-2">
                            <i class="fas fa-ellipsis-v">
                            </i>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">
                            02
                        </td>
                        <td class="p-2">
                            Bayam
                        </td>
                        <td class="p-2">
                            55
                        </td>
                        <td class="p-2">
                            Ikat
                        </td>
                        <td class="p-2">
                            <a href="{{ route('laporan-detail') }}">
                                <i class="fas fa-ellipsis-v text-green-600">
                                </i>
                            </a>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">
                            03
                        </td>
                        <td class="p-2">
                            Jagung
                        </td>
                        <td class="p-2">
                            60
                        </td>
                        <td class="p-2">
                            Buah
                        </td>
                        <td class="p-2">
                            <i class="fas fa-ellipsis-v">
                            </i>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">
                            04
                        </td>
                        <td class="p-2">
                            Kangkung
                        </td>
                        <td class="p-2">
                            42
                        </td>
                        <td class="p-2">
                            Ikat
                        </td>
                        <td class="p-2">
                            <i class="fas fa-ellipsis-v">
                            </i>
                        </td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-2">
                            05
                        </td>
                        <td class="p-2">
                            Timun
                        </td>
                        <td class="p-2">
                            75
                        </td>
                        <td class="p-2">
                            Buah
                        </td>
                        <td class="p-2">
                            <i class="fas fa-ellipsis-v">
                            </i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
