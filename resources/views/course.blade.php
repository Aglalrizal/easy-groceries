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
                {{-- <div class="relative">
                    <input class="border border-green-500 rounded-full py-2 px-4 pl-10 focus:outline-none"
                        placeholder="Cari..." type="text" />
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-green-500">
                    </i>
                </div> --}}
                <i class="fas fa-shopping-cart text-2xl ml-6">
                </i>
                <i class="fas fa-user text-2xl ml-6">
                </i>
                <span class="ml-2">
                    {{ @Auth::user()->name }}
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
    <main class="p-4">
        <h2 class="text-2xl font-bold mb-4">
            Ayo pilih pelatihanmu!
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Person planting seedlings in a garden" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/yJ1LvbdunV7aBde5N2FLppYTWpXNfo7Veql9ngew9rZbPqdPB.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        Benihemat
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Person holding a grocery bag in a market" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/oNhWlh33dkbIGlHasxN3UXnGBTX4KgnmrRvyk3HVzux7o29E.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        Grocery Savvy
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Two people discussing groceries" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/DK90fY5Rn8wtbCYeBpXs2YrnPtGyJNu9rTvjBcrtff7MPqdPB.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        GroceryPro
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Group of people on motorcycles" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/vr1cZAMfdgUILa65cRRv7FZV9WzmnAkHGlwf8oDQl9i3ja3TA.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        Grocery 101
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Person shopping for groceries" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/xLfO2ceD6Nhbj0T8Uqlf2DecmBazFX6c2xMe0gl0lzUjeo29E.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        Grocery Savvy
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="People shopping at a fish market" class="w-full h-48 object-cover" height="400"
                    src="https://storage.googleapis.com/a1aa/image/lw5bLV3H6Ma1CN7eeu6cqiXa1orfQOSldQDNVWKXtNojH1unA.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center text-gray-600 mb-2">
                        <i class="fas fa-users mr-2">
                        </i>
                        <span>
                            32 anggota
                        </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        GroceryPro
                    </h3>
                    <a class="text-green-600" href="#">
                        Lihat komunitas
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
