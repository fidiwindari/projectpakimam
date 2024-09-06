<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      color: D1E9F6;
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: pink">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: black">Beranda</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="background-color: pink; color:black">Product</a></li>
        <li><a href="#" style="color: black">About</a></li>
        <li><a href="#" style="color:black">Gallery</a></li>
        <li><a href="#" style="color: black">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="row-2 text-center" style="padding-left: 20% ">
    <div class="col-sm-4">
        <div class="thumbnail">
            <img src="{{ asset('storage/image/'.$produk->foto) }}" alt="" width="400" height="300">
            <br>
        </div>
    </div>
    <div class="col-sm-5" style="background-color: pink; padding-left:10px ">
        <h4>{{ $produk->name }}</h4>
    </div>
</div>


      <div class="col-sm-4" style="padding-top: 5%">
        <div class="well">
            <p>Harga:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp.{{  $produk->harga }}</p>
            <p>warna:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{  $produk->size }}</p>
            <p>Harga:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{  $produk->warna}}</p>
            <p>Stok:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{  $produk->stok}}</p>
            <div class="input-group">
                <input type="number" class="form-control" id="quantity" placeholder="Masukan jumlah produk">
            </div>
            <ul class="pager">
              <form action="/keranjang" method="get">
              <button href="submit" class="btn btn-warning">Keranjang</button>
              </form>

            </ul>
            <ul class="pager">
                <form action="/user/cekout" method="get">
                    <button type="submit" class="btn btn-warning">Checkout</button>
  
                </ul>
        </div>
      </div>

      </div>
      
        </div>
      </div>
    </form>
      
</body>
</html>