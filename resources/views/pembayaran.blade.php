<!DOCTYPE html>
<html lang="id">
  <head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Metode Pembayaran</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #7865f3;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    header {
      background-color: #4c0a0a;
      color: #f16060;
      text-align: center;
      padding: 1em 0;
    }

    .container {
      background-color: #f0cdcd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 80%;
      max-width: 600px;
      margin: 20px;
      padding: 20px;
    }

    .product-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .product-item {
      padding: 15px;
      border-bottom: 1px solid #f1ecec;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .product-name {
      font-weight: bold;
    }

    .product-quantity {
      margin-right: 10px;
    }

    .product-price {
      font-weight: bold;
    }

    .payment-method, .upload-section, .total-price {
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .upload-section {
      border-top: 1px solid #f3eded;
      border-bottom: 1px solid #ddd;
    }

    .file-input {
      margin-top: 10px;
    }

    .checkout-btn {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 4px;
      margin-top: 15px;
      transition: background-color 0.3s ease;
    }

    .checkout-btn:hover {
      background-color: #45a049;
    }
  </style>
  </head>
  <body>

  <div class="container">
    <ul class="product-list" id="productList">
      <li class="product-item">
        <div class="product-name">Sakatonik</div>
        <div class="product-quantity">Jumlah: 1</div>
        <div class="product-price">15.000</div>
      </li>
      <li class="product-item">
        <div class="product-name">Antimo</div>
        <div class="product-quantity">Jumlah: 2</div>
        <div class="product-price">15.000</div>
      </li>
      <!-- Tambahkan produk lainnya sesuai kebutuhan -->
    </ul>

    <div class="payment-method">
      <label for="paymentMethod">Metode Pembayaran: Dana</label>
      <select id="paymentMethod">
        <option value="dana">082246601162</option>
        <!-- Tambahkan metode pembayaran lainnya sesuai kebutuhan -->
      </select>
    </div>

    <div class="upload-section">
      <label for="paymentProof">Upload Bukti Pembayaran:</label>
      <input type="file" id="paymentProof" class="file-input" accept="image/*">
    </div>

    <div class="total-price" id="totalPrice">Total: 10.000</div>
    <div class="checkout-btn-container">
    <a href="http://127.0.0.1:8000/riwayat-pemesanan" class="checkout-btn">Checkout</a>

  <script>
    function updateTotal() {
      const productList = document.getElementById('productList');
      const totalPriceElement = document.getElementById('totalPrice');
      let total = 0;

      for (let i = 0; i < productList.children.length; i++) {
        const productItem = productList.children[i];
        const priceElement = productItem.querySelector('.product-price');
        const price = parseFloat(priceElement.textContent.replace('$', ''));
        total += price;
      }

      totalPriceElement.textContent = `Total: ${total.toFixed(2)}`;
    }

    function checkout() {
      const paymentMethod = document.getElementById('paymentMethod').value;
      const paymentProof = document.getElementById('paymentProof').value;

      if (paymentMethod === 'dana' && paymentProof !== '') {
        alert('Proses pembayaran berhasil!');
        // Tambahan: Anda dapat menambahkan logika pembayaran sesuai kebutuhan di sini
      } else {
        alert('Silakan pilih metode pembayaran dan unggah bukti pembayaran.');
      }
    }

    // Pemanggilan fungsi updateTotal saat halaman dimuat
    updateTotal();
  </script>

</body>
</html>
