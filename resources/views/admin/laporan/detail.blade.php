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
                <a href="{{ route('detail') }}">
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
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold">
                    Detail Laporan
                </h1>
                <h2 class="text-xl">
                    November 2024
                </h2>
            </div>
            <h3 class="text-2xl font-bold">
                Bayam
            </h3>
        </div>
        <div class="overflow-x-auto mt-4">
            <table class="min-w-full border-collapse">
                <thead>
                    <tr class="bg-green-100">
                        <th class="py-2 px-4 border">
                            Tanggal
                        </th>
                        <th class="py-2 px-4 border">
                            Stok yang Tersisa
                        </th>
                        <th class="py-2 px-4 border">
                            Pemasukan Stok
                        </th>
                        <th class="py-2 px-4 border">
                            Stok Terjual
                        </th>
                        <th class="py-2 px-4 border">
                            Stok tersedia
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">
                            01/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            10
                        </td>
                        <td class="py-2 px-4 border">
                            50
                        </td>
                        <td class="py-2 px-4 border">
                            40
                        </td>
                        <td class="py-2 px-4 border">
                            10
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            02/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            8
                        </td>
                        <td class="py-2 px-4 border">
                            50
                        </td>
                        <td class="py-2 px-4 border">
                            42
                        </td>
                        <td class="py-2 px-4 border">
                            18
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            03/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            18
                        </td>
                        <td class="py-2 px-4 border">
                            30
                        </td>
                        <td class="py-2 px-4 border">
                            30
                        </td>
                        <td class="py-2 px-4 border">
                            18
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            04/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            18
                        </td>
                        <td class="py-2 px-4 border">
                            30
                        </td>
                        <td class="py-2 px-4 border">
                            12
                        </td>
                        <td class="py-2 px-4 border">
                            30
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            05/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            4
                        </td>
                        <td class="py-2 px-4 border">
                            60
                        </td>
                        <td class="py-2 px-4 border">
                            56
                        </td>
                        <td class="py-2 px-4 border">
                            24
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            06/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            6
                        </td>
                        <td class="py-2 px-4 border">
                            45
                        </td>
                        <td class="py-2 px-4 border">
                            39
                        </td>
                        <td class="py-2 px-4 border">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            07/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            5
                        </td>
                        <td class="py-2 px-4 border">
                            36
                        </td>
                        <td class="py-2 px-4 border">
                            31
                        </td>
                        <td class="py-2 px-4 border">
                            8
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">
                            08/11/24
                        </td>
                        <td class="py-2 px-4 border">
                            2
                        </td>
                        <td class="py-2 px-4 border">
                            45
                        </td>
                        <td class="py-2 px-4 border">
                            43
                        </td>
                        <td class="py-2 px-4 border">
                            12
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
