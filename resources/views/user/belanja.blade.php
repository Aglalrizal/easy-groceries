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
    <script>
        function updateValue(inputId, increment) {
            const input = document.getElementById(inputId);
            let value = parseInt(input.value);
            if (isNaN(value)) {
                value = 0;
            }
            value += increment;
            if (value < 0) {
                value = 0;
            }
            input.value = value;
        }
    </script>
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
    <main class="container mx-auto py-8 px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-green-100 rounded-lg p-4 shadow-md">
                <img alt="Bunch of carrots" class="w-full h-40 object-cover mb-4" height="200"
                    src="https://storage.googleapis.com/a1aa/image/QtfNaffyNAe6RT6emBdxBkNNMGivlp3lXCfVfVf1WALpEXT3TA.jpg"
                    width="200" />
                <h2 class="text-xl font-bold">
                    Wortel
                </h2>
                <h3 class="text-l font-bold">
                    Tersedia 123 buah
                </h3>
                <p class="text-gray-600">
                    Rp3.000/buah
                </p>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center">
                        <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-l"
                            onclick="updateValue('wortel-input', -1)">
                            -
                        </button>
                        <input class="w-12 text-center border border-gray-300" id="wortel-input" type="text"
                            value="0" />
                        <button class="bg-gray-200 text-gray-700 px-2 py-1 rounded-r"
                            onclick="updateValue('wortel-input', 1)">
                            +
                        </button>
                    </div>
                    <i class="fas fa-shopping-basket text-green-500">
                    </i>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
