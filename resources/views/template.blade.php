<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset('assets/bootstrap-5.0.2-dist/css/boostrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">XII RPL 1</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/user" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/user/artikel" class="nav-link">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pt-5">
        @yield('content')
    </div>
    
</body>
<script src="{{ asset('assets/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}" ></script>
</html>