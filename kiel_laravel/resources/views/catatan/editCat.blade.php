@extends('main')

@section('title')
    Edit Catatan
@endsection

@section('content')

<style>
    .jadwal{
        justify-content: center;
        padding: 50px;
    }
</style>

    <div class="jadwal">
        <div class="row">
            <div class="col">
                <h4>Edit Catatan</h4>
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/jadwal') }}">Edit Catatan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Catatan</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Edit Catatan</strong> saya
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title mb-3">Edit Catatan</h5>
                        <form action="" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-2">
                                    <div class="form-outline">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" value="{{}}" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-outline">
                                        <label for="judul" class="form-label">Judul Catatan</label>
                                        <input type="text" value="{{}}" placeholder="Tulis judul catatan Anda..." name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror">
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col">
                                    <div class="form-outline">
                                        <div class="form-floating">
                                            <textarea value="{{}}" class="form-control" name="isi" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Tulis isi Catatan Anda...</label>
                                        </div>
                                        {{-- <label for="isi" class="form-label">Isi Catatan Anda!!!</label>
                                        <input type="text" placeholder="Tulis isi catatan Anda..." name="isi" id="isi" class="form-control @error('isi') is-invalid @enderror"> --}}
                                        @error('isi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan Catatan</button>
                            <button type="reset" class="btn btn-warning btn-sm">Batal</button>
                            <a href="{{ url('/catatan') }}" class="btn btn-success btn-sm">
                                <i class="bi bi-arrow-bar-left"></i> Kembali
                            </a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection