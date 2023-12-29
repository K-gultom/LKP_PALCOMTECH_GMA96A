@extends('home.main')
@section('title')
    Data Service
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4>Add Data Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item">Add Data</li>
            </ol>
        </nav>
        <div class="col-md-4 offset-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <strong>Add</strong> Data Service
                </div>
                <div class="card-body">
                    @if(Session::has('msg'))
                        <div class="card alert alert-success">
                            {{Session::get('msg')}}
                        </div>
                    @endif
                        <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                            {{--
                                berfungsi untuk membuat form kita dapat menerima data berupa gambar pada saat proses input data gambar 
                                enctype="multipart/form-data" 
                            --}}
                            @csrf

                            {{-- service Name --}}
                            <div class="mb-3">
                                <label for="serviceName">Service Name</label>
                                <input value="{{old('serviceName')}}" type="text" name="serviceName" id="serviceName" class="form-control @error('serviceName') is-invalid @enderror" placeholder="service Name..." autocomplete="off">
                                @error('serviceName')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- service Price --}}
                            <div class="mb-3">
                                <label for="servicePrice">Service Price</label>
                                <input value="{{old('servicePrice')}}" type="number" name="servicePrice" id="servicePrice" class="form-control @error('servicePrice') is-invalid @enderror" placeholder="service Price..." autocomplete="off">
                                @error('servicePrice')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- service Description --}}
                            <div class="mb-3">
                                <label for="description">Description of Service</label>
                                <input value="{{old('description')}}" type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Description of Service..." autocomplete="off">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Save Data
                            </button>
                            <button type="reset" class="btn btn-light btn-sm">
                                Reset Form
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection