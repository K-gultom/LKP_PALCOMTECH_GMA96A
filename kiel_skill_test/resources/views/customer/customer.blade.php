@extends('home.main')
@section('title')
    Data Customer
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4>Data Customer</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item">Customer</li>
            </ol>
        </nav>
        <div class="col-md-4 offset-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="w-100 pt-1"> 
                            <strong>Search</strong> Data Customer
                        </div>
                        <div class="w-100 text-end">
                            <a href="{{url('/add/data/customer')}}" class="btn btn-primary btn-sm"> 
                                Tambah Data Pegawai <i class="bi bi-plus-circle"></i> 
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="card-body p-5">
                    @if(Session::has('msg'))
                        <div class="card alert alert-success">
                            {{Session::get('msg')}}
                        </div>
                    @endif
                    <form action="{{url('#')}}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search Customer Info ...">
                            <button class="btn  btn-primary btn-sm" type="submit">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection