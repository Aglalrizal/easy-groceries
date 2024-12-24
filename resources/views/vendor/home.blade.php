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
    <main class="flex-grow flex flex-col items-center justify-center bg-gray-100 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-10 flex flex-col items-center">
                <img alt="Order icon" class="h-24 w-24 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/DfsFVqeWuqnOJkcEeujW8tufkg4d1PyV1Q9cd9YhkX7wS6mPB.jpg"
                    width="100" />
                <span class="text-xl font-semibold">
                    Pesanan
                </span>
            </div>
            <div class="bg-green-500 text-white rounded-lg shadow-lg p-10 flex flex-col items-center">
                <img alt="History icon" class="h-24 w-24 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/OfPGb98iraRady2ySlHSdttD0gQCxczOB0XJYW4K7EVVS38JA.jpg"
                    width="100" />
                <span class="text-xl font-semibold">
                    Riwayat
                </span>
            </div>
        </div>
    </main>
    <!-- Footer -->
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
    <!-- Scripts -->
    <script>
        function previewImage() {
            const input = document.getElementById('image');
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]); // Membaca file gambar sebagai URL Data
            }
        }

        function toggleOtherUnitInput() {
            var select = document.getElementById("unit");
            var otherUnitDiv = document.getElementById("otherUnitDiv");

            if (select.value == "Other") {
                otherUnitDiv.style.display = "block";
            } else {
                otherUnitDiv.style.display = "none";
            }
        }

    </script>
</body>

</html>
