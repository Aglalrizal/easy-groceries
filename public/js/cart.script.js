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

            const summaryItem = document.createElement('div');
            summaryItem.className = 'flex justify-between mb-2';
            summaryItem.innerHTML = `
                <span>${slug.charAt(0).toUpperCase() + slug.slice(1)}</span>
                <span>${quantity} ${unit}</span>
                <span>Rp${subtotal.toLocaleString()}</span>
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

    document.getElementById('total-payment').innerText = `Rp${totalWithTax.toLocaleString()}`;
}

// Pastikan updateSummary() dipanggil saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', updateSummary);
