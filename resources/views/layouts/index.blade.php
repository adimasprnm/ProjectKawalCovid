<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Reunion.png') }}" alt="Logo" style="width:25px;">
        </a>
        <ul class="navbar-nav">
            {{-- Navigation Links --}}
            <li class="nav-item">
                <a class="nav-link" href="">Home</a>
            </li>
            {{-- Navgationlinks --}}
            {{-- -------------- --}}
            {{-- Dropdown --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Data
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Provinsi</a>
                    <a class="dropdown-item" href="#">Kota</a>
                    <a class="dropdown-item" href="#">Kecamatan</a>
                    <a class="dropdown-item" href="">Kelurahan</a>
                    <a class="dropdown-item" href="">RW</a>
                </div>
            </li>
            {{-- Dropdown --}}
            {{-- -------- --}}
        </ul>
    </nav>

@yield('content')
</body>
</html>