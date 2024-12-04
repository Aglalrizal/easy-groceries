<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>EasyGroceries</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="EasyGroceries logo" class="h-10" height="50"
                    src="https://storage.googleapis.com/a1aa/image/sVsp0nf35erHRkrYqteQ6Ou2BBbQry2fx1wGOiCtwGSOev4eE.jpg"
                    width="50" />
                <span class="ml-2 text-xl font-bold text-gray-800">EasyGroceries</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-headset text-xl text-gray-800"></i>
                <span class="ml-2 text-gray-800">Toko 5A</span>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                <img alt="Manage Ingredients icon" class="h-16 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/bwFUGPTTtD6HIRNBbgKLoMcjEI14W22b27MApTMsDPi3fi7JA.jpg"
                    width="100" />
                <span class="text-lg font-semibold text-gray-800">Kelola Bahan</span>
            </div>
            <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                <img alt="Order Notes icon" class="h-16 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/myDkV5Ep4O5rNxTHW21clsZ4S7odJ3201fTCMJLHLC3wfF3TA.jpg"
                    width="100" />
                <span class="text-lg font-semibold text-gray-800">Catatan Pesanan</span>
            </div>
            <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                <img alt="Report icon" class="h-16 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/B56mAeLzsfqrME9ZMPieW7MydOwTHJKzrt5KmvxUPGZAfXcPB.jpg"
                    width="100" />
                <span class="text-lg font-semibold text-gray-800">Laporan</span>
            </div>
            <div class="bg-green-100 p-6 rounded-lg shadow-md flex flex-col items-center">
                <img alt="Customer icon" class="h-16 mb-4" height="100"
                    src="https://storage.googleapis.com/a1aa/image/o8GKrB5R6TI8FdzZMjyoqBbKdsCWSnmY2EzzbauHuYI5fi7JA.jpg"
                    width="100" />
                <span class="text-lg font-semibold text-gray-800">Pelanggan</span>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-green-100 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <span class="text-lg font-bold text-gray-800">EasyGroceries</span>
                <p class="text-gray-600">© 2024 PT. Segar Jaya. All Rights Reserved</p>
            </div>
            <div class="flex space-x-4">
                <span class="text-gray-800">Media Sosial</span>
                <a class="text-gray-800" href="#"><i class="fab fa-instagram"></i></a>
                <a class="text-gray-800" href="#"><i class="fab fa-facebook"></i></a>
                <a class="text-gray-800" href="#"><i class="fab fa-x-twitter"></i></a>
                <a class="text-gray-800" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
