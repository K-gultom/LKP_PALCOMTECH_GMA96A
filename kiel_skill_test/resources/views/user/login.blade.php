<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <title>Login</title>
</head>
<body>
    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        .navbar{
            background-color: #999696;
        }
    </style>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid text-center" >
            <h3 class="text-light">
                <Marquee direction="left">Provider Recap App - Yehezkiel Gultom, 
                    Silahkan login untuk menggunakan Aplikasi ini atau jika belum mempunyai akun, silahkan 
                    untuk register terlebih dahulu *)
                </Marquee>
            </h3>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-3">
                <div class="card-header">
                    <strong>Login</strong>
                </div>
                <div class="card-body">
                    <form action="{{ url('/') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ..." autocomplete="off">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </button>
                        <a href="{{ url('/register') }}" class="btn btn-warning"><i>Register</i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>