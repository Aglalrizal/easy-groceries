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
                <a href="{{ route('daftar') }}">
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
    <main class="flex-grow p-6">
        <h1 class="text-2xl font-bold mb-4">
            Detail Pesanan
        </h1>
        <div>
            <p class="text-lg font-bold">
                Nomor Order: 05
            </p>
            <p>
                Dzaki Syauqi
            </p>
        </div>
        <p class="text-right">
            07/11/24
        </p>
        </div>
        <h2 class="text-lg font-bold mb-2">
            Ringkasan Pembayaran
        </h2>
        <div class="border border-green-500 rounded p-4">
            <table class="w-full">
                <tbody>
                    <tr>
                        <td class="py-2">
                            Bayam
                        </td>
                        <td class="py-2">
                            10 ikat
                        </td>
                        <td class="py-2 text-right">
                            Rp30.000
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            Cabai merah
                        </td>
                        <td class="py-2">
                            1 kilogram
                        </td>
                        <td class="py-2 text-right">
                            Rp32.000
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            Cabai rawit
                        </td>
                        <td class="py-2">
                            1 kilogram
                        </td>
                        <td class="py-2 text-right">
                            Rp45.000
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            Timun
                        </td>
                        <td class="py-2">
                            10 buah
                        </td>
                        <td class="py-2 text-right">
                            Rp10.000
                        </td>
                    </tr>
                    <tr class="font-bold border-t border-green-500">
                        <td class="py-2">
                            Total Pembayaran
                        </td>
                        <td class="py-2">
                        </td>
                        <td class="py-2 text-right">
                            Rp117.000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
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
