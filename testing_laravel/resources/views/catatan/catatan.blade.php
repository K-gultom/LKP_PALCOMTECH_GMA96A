@extends('main')
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
                                <strong>Catatan</strong> saya
                            </div>
                            <div class="w-100 text-end">
                                <a href="{{ url('/catatan') }}" class="btn btn-warning btn-sm">
                                    Refresh <i class="bi bi-circle"></i>
                                </a>
                                <a href="{{ url('/catatan/add') }}" class="btn btn-success btn-sm">
                                    Tambah Catatan <i class="bi bi-file-earmark-plus-fill"></i>
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
                        <div class="row">
                            <div class="col-md-2">
                                <div class="card mb-3">
                                    <div class="card-header">Catatan 1</div>
                                    <div class="card-body mb-3"> 
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit
                                        orem ipsum, dolor sit amet consectetur adipisicing elit
                                        orem ipsum, dolor sit amet consectetur adipisicing elit
                                        orem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <a href="{{url('/catatan/view')}}" class="btn btn-primary col-8 mb-2 mx-1 btn-sm">Lihat Catatan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection