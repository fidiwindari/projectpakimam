<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: rgb(118, 184, 243); padding-left:30%">

    <div class="container mt-5">
        <h2>Checkout</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="city">Kota</label>
                        <input type="text" class="form-control" id="city" placeholder="Kota">
                    </div>
                    <div class="form-group">
                        <label for="postal-code">Kode Pos</label>
                        <input type="text" class="form-control" id="postal-code" placeholder="Kode Pos">
                    </div>
                    <label for="postal-code">Metode Pembayaran</label>
                    <div class="form-group">
                        <label for="country" class="form-label">Pilih Metode Pembayaran</label>
                        <select class="form-select" id="country" required>
                            <option value="">COD</option>
                            <option value="">Dana</option>
                        </select>
                    </div>

                    </div>

                </div>


{{--
            <button type="submit" class="btn btn-primary mt-3">Konfirmasi Pembayaran</button> --}}
            <a href="/checkout" class="btn btn-primary" style="margin-left:15%">Konfirmasi Pembayaran</a>
                </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>