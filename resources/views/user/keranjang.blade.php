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
        <h2 class="text-2xl font-bold mb-4">Keranjang Saya</h2>
        <div class="flex flex-col lg:flex-row">
            <div class="flex-1">
                @foreach($cart as $item)
                <div id="{{ $item->product->slug}}-item"
                    class="bg-white p-4 rounded-lg shadow-md mb-4 flex items-center">
                    <input id="{{ $item->product->slug }}-checkbox" class="form-checkbox h-5 w-5 text-green-500"
                        type="checkbox" onchange="updateSummary()" />
                    <img alt="{{ $item->product->name}}" class="w-20 h-20 mx-4" height="100"
                        src="{{ asset('images/products/'.$item->product->image) }}" width="100" />
                    <div class="flex-1">
                        <h3 class="text-lg font-bold">{{ $item->product->name}}</h3>
                        <p>Rp. {{ number_format($item->product->price) }}/<span
                                id="{{ $item->product->slug }}-unit">{{ $item->product->unit }}</span></p>
                    </div>
                    <form action="{{ "cart/update/".$item->product->id }}" method="post" class="flex m-0">
                        @csrf
                        <div class="flex items-center">
                            <input hidden type="text" value="{{ $item->product->id }}" name="product_id" />
                            <button type="button" class="bg-gray-200 px-2 py-1 rounded-l"
                                onclick="updateValue('{{ $item->product->slug }}-quantity', -1)">-</button>
                            {{-- <span  class="px-4" name="qty">{{ $item->qty }}</span> --}}
                            <input class="w-12 text-center border border-gray-300 py-1"
                                id="{{ $item->product->slug }}-quantity" type="text" value="{{ $item->qty }}"
                                name="qty" />
                            <button type="button" class="bg-gray-200 px-2 py-1 rounded-r"
                                onclick="updateValue('{{ $item->product->slug }}-quantity', 1)">+</button>
                        </div>
                        <button type="submit" id="{{ $item->product->slug }}-update"
                            class="bg-blue-500 text-white px-4 py-1 rounded ml-4"
                            onclick='return confirm("Apakah kamu yakin ingin mengupdate item ini?")'>Update</button>
                    </form>
                </div>
                @endforeach
            </div>
            <div class="bg-green-100 p-4 h-100 rounded-lg shadow-md lg:ml-4 lg:w-1/3">
                <h3 class="text-lg font-bold mb-4">Ringkasan Pesanan</h3>
                <form id="summary-form" action="/checkout" method="POST">
                    @csrf
                    <div id="summary-items">
                        <!-- Summary items will be dynamically added here -->
                    </div>
                    <hr class="my-2" />
                    <div class="flex justify-between font-bold">
                        <span>Total Pembayaran</span>
                        <span id="total-payment">Rp0</span>
                    </div>
                    <div class="flex justify-between mt-4">
                        <button type="button" class="bg-white border border-green-500 text-green-500 px-4 py-2 rounded">
                            <a href="{{ route('belanja') }}">Tambah Keranjang</a>
                        </button>
                        <button id="checkout-btn" type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
    function getCartItems() {
        const summaryItems = document.querySelectorAll('#summary-items .flex.justify-between.mb-2');
        const items = [];

        summaryItems.forEach(item => {
            const spans = item.querySelectorAll('span');
            const name = spans[0].textContent.trim();
            const quantityAndUnit = spans[1].textContent.trim(); // Contoh: "7 Kg"
            const priceText = spans[2]?.textContent.trim(); // Contoh: "Rp105.000"

            // Cek apakah ini bukan baris pajak
            if (!name.toLowerCase().includes('pajak')) {
                const [quantity, unit] = quantityAndUnit.split(' '); // Pecah "7 Kg" menjadi 7 dan Kg
                const price = parseInt(priceText.replace(/[^\d]/g,
                    '')); // Hilangkan karakter non-numerik dari harga

                items.push({
                    name: name,
                    quantity: parseInt(quantity),
                    price: price
                });
            }
        });

        return items;
    }
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
        updateSummary();
    }


    function updateSummary() {
        const summaryItems = document.getElementById('summary-items');
        summaryItems.innerHTML = ''; // Bersihkan ringkasan sebelum update

        let totalPayment = 0;

        // Loop melalui elemen dengan checkbox produk
        document.querySelectorAll('[id$="-checkbox"]').forEach(checkbox => {
            const slug = checkbox.id.replace('-checkbox', '');
            const quantityElement = document.getElementById(`${slug}-quantity`);
            const quantity = parseInt(quantityElement.value);
            const price = parseInt(checkbox.closest(`#${slug}-item`).querySelector('p').innerText.replace(/[^\d]/g, ''));
            const updateButton = document.getElementById(`${slug}-update`);
            const unit = document.getElementById(`${slug}-unit`).textContent;

            if (quantity === 0) {
                updateButton.innerText = 'Hapus';
                updateButton.classList.remove('bg-blue-500');
                updateButton.classList.add('bg-red-500');
                updateButton.onclick = () => {
                    return confirm('Apakah Anda yakin ingin menghapus item ini?');
                };
            } else {
                updateButton.innerText = 'Update';
                updateButton.classList.remove('bg-red-500');
                updateButton.classList.add('bg-blue-500');
            }

            if (checkbox.checked && quantity > 0) {
                const subtotal = price * quantity;
                totalPayment += subtotal;

                // Create an input element for quantity and price
                const summaryItem = document.createElement('div');
                summaryItem.className = 'flex justify-between mb-2';
                summaryItem.innerHTML = `
                    <input type='text'>${slug.charAt(0).toUpperCase() + slug.slice(1)}</input>
                    <input type="number" name="${slug}-quantity" value="${quantity}" min="0" class="w-20 text-center border p-1" onchange="updateTotal()">
                    <span>${unit}</span>
                    <input type="text" name="${slug}-subtotal" value="Rp${subtotal.toLocaleString()}" readonly class="text-right bg-transparent border-none p-1">
                `;
                summaryItems.appendChild(summaryItem);
            }
        });

        // Hitung pajak dan total
        const tax = totalPayment * 0.025;
        const totalWithTax = totalPayment + tax;
        const taxElement = document.createElement('div');
        taxElement.className = 'flex justify-between mb-2';
        taxElement.innerHTML = `
            <span>Pajak (2.5%)</span>
            <span>Rp${tax.toLocaleString()}</span>
        `;
        summaryItems.appendChild(taxElement);

        // Update total payment
        document.getElementById('total-payment').innerText = `Rp${totalWithTax.toLocaleString()}`;
    }

    function updateTotal() {
        let totalPayment = 0;
        document.querySelectorAll('[name$="-quantity"]').forEach(input => {
            const slug = input.name.replace('-quantity', '');
            const quantity = parseInt(input.value);
            const price = parseInt(document.getElementById(`${slug}-price`).innerText.replace(/[^\d]/g, ''));
            const subtotal = price * quantity;

            // Update subtotal display
            document.querySelector(`[name="${slug}-subtotal"]`).value = `Rp${subtotal.toLocaleString()}`;
            totalPayment += subtotal;
        });

        const tax = totalPayment * 0.025;
        const totalWithTax = totalPayment + tax;

        // Update total
        document.getElementById('total-payment').innerText = `Rp${totalWithTax.toLocaleString()}`;
    }

    // Call updateSummary to initialize the summary
    updateSummary();
    // Pastikan updateSummary() dipanggil saat halaman pertama kali dimuat
    document.addEventListener('DOMContentLoaded', updateSummary);

</script>
<script src="{{ asset('js/cart.script.js') }}"></script>
</body>

</html>
