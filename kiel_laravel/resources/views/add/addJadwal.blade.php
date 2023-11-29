@extends('main')

@section('title')
    Tambah Jadwal
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
                <h4>Tambah Jadwal</h4>
                <nav aria-label="breadcrumb" class="mb-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/jadwal') }}">Data Jadwal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Jadwal</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Tambah Jadwal</strong> saya
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title mb-3">Tambah Data</h5>
                        <form action="" method="post">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-2">
                                    <div class="form-outline">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label for="kegiatan" class="form-label">Kegiatan</label>
                                        <input type="text" placeholder="Tulis Kegiatan Anda..." name="kegiatan" id="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror">
                                        @error('kegiatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label for="tempat" class="form-label">Tempat</label>
                                        <input type="text" placeholder="Dimana Tempat Kegiatan Anda?" name="tempat" id="tempat" class="form-control @error('tempat') is-invalid @enderror">
                                        @error('tempat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan Jadwal</button>
                            <button type="reset" class="btn btn-warning btn-sm">Batal</button>
                            <a href="{{ url('/jadwal') }}" class="btn btn-success btn-sm">
                                <i class="bi bi-arrow-bar-left"></i> Kembali
                            </a>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection