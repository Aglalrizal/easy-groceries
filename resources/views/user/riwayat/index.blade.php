<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        EasyGroceries
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a href="/logout" class="block px-4 py-2 text-red-600 hover:bg-gray-100"
                            onclick="return confirm('Are you sure?')">
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
        <h2 class="text-2xl font-bold mb-4">Riwayat Pesanan Saya</h2>
        @if ($orders->count())
        <div class="flex flex-col lg:flex-row">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead class="bg-green-100">
                    <tr>
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Tanggal</th>
                        <th class="py-2 px-4 text-left">Total Harga</th>
                        <th class="py-2 px-4 text-left">Status</th>
                        <th class="py-2 px-4 text-left text-center">Detail Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)    
                    <tr class="border-b border-green-500">
                        <td class="py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('j F Y')}}</td>
                        <td class="py-2 px-4">Rp. {{ number_format($item->total_amount) }}</td>
                        <td class="py-2 px-4">{{ Str::ucfirst($item->status) }}</td>
                        <td class="py-2 px-4 text-center"><a href="riwayat/{{ $item->id }}"><i
                            class="fas fa-ellipsis-h text-green-600"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <h3>Anda belum memiliki riwayat pesanan.</h3> 
        @endif
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
