<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white min-h-screen">
    <div class="absolute top-0 left-0 m-4 flex items-center">
        <img alt="EasyGroceries logo" class="mr-2" height="40"
            src="{{ asset('images/easygroceries-logo.png') }}"
            width="40" />
        <span class="text-2xl font-bold">EasyGroceries</span>
    </div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md mx-auto p-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold">Login</h1>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="email" placeholder="Masukkan email Anda" name="email" type="email" />
                </div>
                <div class="mb-6">
                    <label class="block text-lg font-medium mb-2" for="password">Kata Sandi</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="password" placeholder="Masukkan kata sandi Anda" name="password" type="password" />
                </div>
                <div class="text-center">
                    <button
                        type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
