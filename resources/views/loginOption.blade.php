<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGroceries</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container">
        <!-- Section Kiri -->
        <div class="left-section">
            <div class="logo-container">
                <img src="{{ asset('images/easygroceries-logo.png') }}" alt="EasyGroceries Logo" class="logo">
                <h2 class="title">EasyGroceries</h2>
            </div>
            <h1>Halo!</h1>
            <p>Selamat Datang di <span>EasyGroceries!</span></p>
        </div>

        <!-- Section Kanan -->
        <div class="right-section">
            <div class="login-box">
                <h2>Login</h2>
                <div class="login-options">
                    <button class="login-btn">
                        <img src="{{ asset('images/admin-icon.png') }}" alt="Admin Icon"> Admin
                    </button>
                    <button class="login-btn">
                        <img src="{{ asset('images/user-icon.png') }}" alt="Pelanggan Icon"> Pelanggan
                    </button>
                    <button class="login-btn">
                        <img src="{{ asset('images/courier-icon.png') }}" alt="Pengirim Icon"> Pengirim
                    </button>
                </div>
                <p>Belum punya akun? <a href="#">Daftar</a></p>
            </div>
        </div>
    </div>
</body>

</html>
