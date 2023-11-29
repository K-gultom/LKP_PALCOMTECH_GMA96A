<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        .navbar{
            background-color: #cbb07a;
            
        }
    </style>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid " >
            <a class="navbar-brand text-decoration-none ms-5 text-white " href="#">GMA96A UNIVERSITY</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href={{ url('/') }}>Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href={{ url('/program') }}>Program</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href={{ url('/persegipanjang') }}>Persegi Panjang</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Projek  
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('/persegipanjang') }}">Persegi Panjang</a></li>
                          <li><a class="dropdown-item" href="{{ url('/kalkulator') }}">Kalkulator</a></li>
                          <li><a class="dropdown-item" href="{{ url('/looping1') }}">Looping 1</a></li>
                          <li><a class="dropdown-item" href="{{ url('/looping2') }}">Looping 2</a></li>
                          <li><a class="dropdown-item" href="{{ url('/jadwal') }}">Aplikasi Jadwal</a></li>
                          <li><a class="dropdown-item" href="{{ url('/catatan') }}">Aplikasi Catatan</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 " href={{ url('/tentangkami') }}>Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>