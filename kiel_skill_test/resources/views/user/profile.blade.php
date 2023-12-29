@extends('main')
@section('title')
    Profile
@endsection

@section('content')
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header">
                <strong>Profile</strong>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    <script>
                        setTimeout(function(){
                            document.querySelector('.alert').style.display = 'none';
                        }, 5000);
                    </script>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" value="{{ Auth::user()->nama }}" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Tulis Nama Anda..." autocomplete="off">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" value="{{ Auth::user()->email }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ..." autocomplete="off">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="old_password">Password Lama</label>
                        <input type="text" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Type password ...">
                        @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password Baru</label>
                        <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Update <i class="bi bi-pencil"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection