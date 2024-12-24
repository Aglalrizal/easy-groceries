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
    <main class="container mx-auto mt-8 px-6">
        <h2 class="text-2xl font-bold mb-6">
            Info Pangan
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Bayam" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/bayam-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Bayam
                </h3>
                <p>
                    Bayam adalah sayuran hijau yang kaya akan zat besi dan sangat baik untuk kesehatan. Bayam sering
                    digunakan dalam berbagai hidangan seperti sup, tumisan, atau dijadikan lalapan.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Brokoli" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/brokoli-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Brokoli
                </h3>
                <p>
                    Brokoli merupakan sayuran hijau yang mengandung banyak serat, vitamin, dan mineral. Cocok diolah
                    sebagai tumisan, dikukus, atau menjadi campuran sup sehat.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Jagung" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/jagung-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Jagung
                </h3>
                <p>
                    Jagung adalah bahan makanan kaya karbohidrat yang dapat dimakan langsung setelah direbus, dipanggang,
                    atau menjadi bahan baku berbagai olahan seperti bakwan dan sup.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Kangkung" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/kangkung-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Kangkung
                </h3>
                <p>
                    Kangkung adalah sayuran hijau yang populer di Indonesia. Biasanya dimasak menjadi tumis kangkung
                    dengan bumbu bawang putih dan cabai.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Kol" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/kol-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Kol
                </h3>
                <p>
                    Kol adalah sayuran serbaguna yang sering dijadikan bahan utama sup, lalapan, atau isian lumpia.
                    Rasanya renyah dan kaya nutrisi.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Timun" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/timun-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Timun
                </h3>
                <p>
                    Timun adalah sayuran yang segar, sering digunakan sebagai lalapan, acar, atau bahan salad. Kandungan
                    airnya yang tinggi membuatnya sangat menyegarkan.
                </p>
            </div>
            
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Tomat" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="{{ asset('images/products/tomat-img.png') }}"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Tomat
                </h3>
                <p>
                    Tomat adalah sayuran merah yang manis dan asam, cocok digunakan dalam berbagai hidangan seperti sup,
                    jus, atau sambal. Tomat kaya akan vitamin C dan antioksidan.
                </p>
            </div>
        </div>
    </main>
</body>

</html>
