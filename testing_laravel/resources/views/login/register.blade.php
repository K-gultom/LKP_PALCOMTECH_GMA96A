@extends('main')
@section('title')
    Register
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-3">
                <div class="card-header ">
                    <strong>Register</strong> Form
                </div>
                <div class="card-body">


                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    
                    {{-- @if($errors -> any())
                        <div class="alert alert-warning">
                            <ul class="mb-0">
                                @foreach ($errors -> all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            
                            </ul>
                        </div>
                    @endif 
                     
                    //diatas ini adalah validasi yang berbentuk alert box
                    //yang akan tampil didalam form
                    
                    --}}

                    <form action="{{url('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type full name ..." autocomplete="off">
                            {{-- fungsi dari value="{{old('name')}}
                                untuk menahan nilai di form yang di isi oleh user
                                sehingga user tidak perlu mengulang-ulang mengisi form yang sama
                            --}}                               
                            {{-- @error('name') is-invalid @enderror 
                                fungsi syntax diatas adalah untuk menambahkan alert secara langsung 
                                didalam form yang sedah diisi.
                            --}}
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @endif
                           
                            
                        </div>

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

                        <div class="mb-3">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirm" class="form-control @error('password') is-invalid @enderror" placeholder="Type confirmation password ...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-box-arrow-in-right"></i> Register
                        </button>
                        <button type="reset" class="btn btn-light">
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection