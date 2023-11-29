@extends('main')

@section('title')
    Jadwal
@endsection

@section('content')

<style>
    .jadwal{
        justify-content: center;
        padding: 50px;
    }
</style>

    <div class="jadwal">
        <div class="row mb-5 ">
            <div class="col-6">
                <form action="" method="post">
                    @csrf
                    <label for="cari"><strong>Cari</strong>Data Jadwal</label>
                    <div class="input-group">
                        <input type="date" name="cari" id="" class="form-control">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-search"></i> Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Jadwal</strong> saya
                            </div>
                            <div class="w-100 text-end">
                                <a href="{{ url('/jadwal') }}" class="btn btn-warning btn-sm">
                                    Refresh <i class="bi bi-circle"></i>
                                </a>
                                <a href="{{ url('/jadwal/add') }}" class="btn btn-success btn-sm">
                                    Tambah Jadwal <i class="bi bi-file-earmark-plus-fill"></i>
                                </a>
                            </div>
                        </div>
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

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Tanggal</td>
                                    <td>Kegiatan</td>
                                    <td>Tempat</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($paginatedData as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>{{ $item->tempat }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/jadwal/edit') }}/{{ $item->id }}" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil-fill"></i> Ubah
                                            </a>
                                            <a href="{{ url('/jadwal/delete')}}/{{ $item->id }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Hapus Data ???');">
                                                <i class="bi bi-trash-fill"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{ $paginatedData->appends(['cari' => $search])->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection