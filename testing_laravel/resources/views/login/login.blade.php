@extends('main')
@section('title')
    Login
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header ">
                <strong>Login</strong> Form
            </div>
            <div class="card-body">

                <form action="{{url('login')}}" method="post">

                    @csrf                 
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input value=" {{old('email')}}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ..." autocomplete="off">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @endif
                    </div>
                    
                    <!--Ini button untuk mengirim login-->
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i> Login
                    </button>     
                    <a href="{{url('/register')}}" class="btn btn-warning"><i>Register</i></a>         
                </form>
            </div>
        </div>
    </div>
</div>
@endsection