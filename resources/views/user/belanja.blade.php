<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        EasyGroceries
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <a href="{{ route('cart') }}">
                    <i class="fas fa-shopping-cart text-2xl ml-6">
                    </i>
                </a>
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
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-green-100 rounded-lg p-4 shadow-md">
                <img alt="{{ $product->name }} segar" class="w-full h-40 object-cover mb-4"
                    src="{{ asset('images/products/'.$product->image) }}" />
                <h2 class="text-xl font-bold">
                    {{ $product->name }}
                </h2>
                <h3 class="text-l font-bold">
                    Tersedia {{ $product->stock }}  {{ $product->unit }} buah
                </h3>
                <p class="text-gray-600">
                    Rp. {{ number_format($product->price) }}/ {{ $product->unit }}
                </p>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center">
                        <form action="/cart/add/{{ $product->id }}" method="post">
                        @csrf
                        <button type="button" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-l"
                            onclick="updateValue('{{ $product->slug }}-input', -1)">
                            -
                        </button>
                        <input hidden type="text"
                            value="{{ $product->id }}" name="product_id"/>
                        <input class="w-12 text-center border border-gray-300" id="{{ $product->slug }}-input" type="text"
                            value="0" name="qty"/>
                        <button type="button" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-r"
                            onclick="updateValue('{{ $product->slug }}-input', 1)">
                            +
                        </button>
                    </div>
                        <button type="submit">
                            <i class="fas fa-shopping-basket text-green-500"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
