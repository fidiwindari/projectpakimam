<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Berhasil</title>
    <!-- Gunakan versi terbaru Bootstrap jika memungkinkan -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-message {
            text-align: center;
            margin-top: 50px;
        }
        .confirmation-message h1 {
            font-size: 2.5rem;
            color: #28a745;
        }
        .order-summary {
            margin-top: 30px;
        }
        .contact-info {
            margin-top: 30px;
        }
    </style>
</head>
<body style="background-color: rgb(118, 184, 243)">
    <div class="container">
        <div class="confirmation-message">
            <h1>Checkout Berhasil!</h1>
            <p class="lead">Terima kasih telah berbelanja dengan kami. Pesanan Anda sedang diproses.</p>
        </div>

        <div class="order-summary">
            <h4>Ringkasan Pesanan</h4>
            <ul class="list-group">
                <li class="list-group-item">Nama Produk <span class="float-right"> Stroller Bayi</span></li>
                <li class="list-group-item">Harga <span class="float-right">600.000</span></li>
                <li class="list-group-item">Metode Pembayaran <span class="float-right">COD</span></li>
                <li class="list-group-item">Pengiriman<span class="float-right">15000</span></li>
                <li class="list-group-item">Alamat dan Kota<span class="float-right">Jepang Jepang Selatan</span></li>
                <li class="list-group-item list-group-item-secondary">Total <span class="float-right">1.175.000</span></li>
            </ul>
        </div>

        <div class="contact-info">
            <h4>Informasi Kontak</h4>
            <p>Jika Anda memiliki pertanyaan tentang pesanan Anda, silakan hubungi kami di:</p>
            <ul class="list-unstyled">
                <li>Email: <a href="mailto:support@yourstore.com">fidi123@gmail.com</a></li>
                <li>Telepon: (123) 456-7890</li>
            </ul>
        </div>

        <div class="text-center mt-4">
            <a href="/user" class="btn btn-primary">Komfirmasi Pesanan</a>
        </div>
    </div>

    <!-- Gunakan versi terbaru dari JS jika memungkinkan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>