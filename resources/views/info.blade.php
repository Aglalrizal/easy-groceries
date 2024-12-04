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
                <img alt="Wortel" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/ZEEnE0lgi961F5fkSqyvGTACmTTAbrLJ3t9ABhusXzPMYt7JA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Wortel
                </h3>
                <p>
                    Wortel merupakan sayuran berwarna oranye yang banyak digemari, karena rasanya yang enak dan manfaat
                    wortel yang melimpah. Wortel bisa dimakan mentah, direbus, atau digoreng, dibuat jus, atau campuran
                    puding.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Kubis" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/aeSHz8U58s01KCpXFljepaGALLK9aapggZFNfKI8Ysn3g1unA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Kubis
                </h3>
                <p>
                    Kubis atau Kol adalah tumbuhan dwimusim atau ekamusim berdaun hijau atau ungu yang ditanam sebagai
                    sayuran untuk kepala padat berdaunnya.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Mentimun" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/eFRFn0U9LBWsDizqV1rKoxo0oooMsxC2fwHQE4l7MAudwa3TA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Mentimun
                </h3>
                <p>
                    Mentimun, timun, atau ketimun (Cucumis sativus) merupakan tumbuhan yang menghasilkan buah yang dapat
                    dimakan. Buahnya biasanya dipanen ketika belum masak benar untuk dijadikan sayuran atau penyegar,
                    tergantung jenisnya.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Jagung" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/wxpFXe8MiBy6FiFBhpha7k3SwS8TP3ohyh2KrumKQYcIYt7JA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Jagung
                </h3>
                <p>
                    Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting
                    di dunia, selain gandum dan padi.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Kangkung" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/gZGS9tbBqUrmF501XSWfCtuNg46fmOM6fZh1WdMW8WRsg1unA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Kangkung
                </h3>
                <p>
                    Kangkung (Ipomoea aquatica) adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai
                    makanan.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Brokoli" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/ZxgeJiZCeGvfooiWjsj8owXyY5S4wEWfndygW9fSvH9VCW7eE.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Brokoli
                </h3>
                <p>
                    Brokoli (Brassica oleracea L. Kelompok Italica) adalah tanaman yang sering dibudidayakan.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Sawi" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/BtNXlGyPdbobBRGkXKkZK67fRzgVIfYLLQq976yeZiupg1unA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Sawi
                </h3>
                <p>
                    Sawi adalah sekelompok tumbuhan dari genus Brassica yang dimanfaatkan daun atau bunganya sebagai
                    bahan pangan.
                </p>
            </div>
            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <img alt="Pakcoy" class="w-full h-40 object-cover rounded-md mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/WeCzefy07sZRWI2IEs1GkEwlYnMwDCNj2pEzVd9kkXOzg1unA.jpg"
                    width="300" />
                <h3 class="text-xl font-bold mb-2">
                    Pakcoy
                </h3>
                <p>
                    Pakcoy atau bok choy (Brassica rapa Kelompok Chinensis; suku sawi-sawian atau Brassicaceae) adalah
                    tanaman yang sering dibudidayakan.
                </p>
            </div>
        </div>
    </main>
</body>

</html>
