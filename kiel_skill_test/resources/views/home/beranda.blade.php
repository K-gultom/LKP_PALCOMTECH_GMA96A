@extends('home.main')
@section('title')
    Catatan
@endsection

@section('content')
    
<style>
    .catatan{
        justify-content: center;
        padding: 50px;
    }
    .card-body {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Set the number of lines to display */
        line-clamp: 2;
        -webkit-box-orient: vertical;
    }

</style>

    <div class="catatan">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Beranda</strong>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <h5 class="text-center">Selamat Datang</h5>
                        </div>
                        <div class="row">
                            <p class="text-center">
                                Terima Kasih telah bergabung untuk menggunakan aplikasi dan menjadi bagian dari kami,
                                kami sangat senang atas partisipasi Anda,
                            </p>
                        </div>
                        <div class="row">
                            <h5 class="text-center">Terima Kasih !!!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection