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
                <h1 class="text-3xl font-bold">Register</h1>
            </div>
            <form action="{{ route('daftar') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="block text-lg font-medium mb-2" for="name">
                        Nama
                    </label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="name" placeholder="Masukkan name Anda" name="name" type="text" value="{{ old('name') }}" />
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block text-lg font-medium mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="email" placeholder="Masukkan email Anda" name="email" type="email" alue="{{ old('email') }}"/>
                    @error('Email')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="block text-lg font-medium mb-2" for="address" name="address">
                        Alamat
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="address" name="address" rows="4">{{ old('address', $user->address ?? '') }}</textarea>
                
                    @error('address')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>                
                {{-- <div class="mb-2">
                    <label class="block text-lg font-medium mb-2" for="role" name="role">
                        Role
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="role" name="role">
                        <option value="user" {{ old('role', $user->role ?? '') == 'User' ? 'selected' : '' }}>Pembeli</option>
                    </select>                
                    @error('role')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="mb-2">
                    <label class="block text-lg font-medium mb-2" for="password">Kata Sandi</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="password" placeholder="Masukkan kata sandi Anda" name="password" type="password" />
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>                
                <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="password_confirmation">Konfirmasi Kata Sandi</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        id="password_confirmation" placeholder="Masukkan ulang kata sandi Anda" name="password_confirmation" type="password" />
                        @error('role')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                <div class="text-center">
                    <button
                        type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
