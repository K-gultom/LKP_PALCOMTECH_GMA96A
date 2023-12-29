@extends('home.main')
@section('title')
    Data Customer
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4>Add Data Customer</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item">Add Data</li>
            </ol>
        </nav>
        <div class="col-md-4 offset-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <strong>Add</strong> Data Customer
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

                            {{-- Nomor Provider Customer --}}
                            <div class="mb-3">
                                <label for="customerNumb">Customer Number</label>
                                <input value="{{old('customerNumb')}}" type="number" name="customerNumb" id="customerNumb" class="form-control @error('customerNumb') is-invalid @enderror" placeholder="Customer Number..." autocomplete="off">
                                <sub><i>Fill in the telephone number according to the service</i></sub>
                                @error('customerNumb')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            {{-- Status Service --}}
                            <div class="mb-3">                                
                                <label for="serviceCategory">Choose Service Category</label>
                                <select name="serviceCategory" id="serviceCategory" class="form-control
                                @error('serviceCategory') is-invalid @enderror">
                                    <option value="">Choose</option>
                                    {{-- @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach --}}
                                </select>

                                @error ('serviceCategory')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- Nama Customer --}}
                            <div class="mb-3">
                                <label for="name">Full Name</label>
                                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- Tanggal Lahir --}}
                            <div class="mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="birth">Date of Birth</label>
                                    <input value="{{old('birth')}}" type="date" name="birth" id="birth" class="form-control @error('birth') is-invalid @enderror" />
                                      @error('birth')
                                        <div class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                      @endif
                                  </div>
                            </div>

                            {{-- Jenis kelamin --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="gender">Gender</label>
                                <select  value="{{old('gender')}}" name="gender" class="form-control @error('gender') is-invalid @enderror" id="" >
                                  <option value="">Choose Gender</option>
                                  <option value="L">Male</option>
                                  <option value="P">Female</option>
                                </select>
                                  @error('gender')
                                    <div class="invalid-feedback">
                                      {{$message}}
                                    </div>
                                  @endif
                            </div>

                            {{-- Alamat --}}
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input value="{{old('address')}}" type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address..." autocomplete="off">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- Kota Asal --}}
                            <div class="mb-3">
                                <label for="city">City</label>
                                <input value="{{old('city')}}" type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" placeholder="City..." autocomplete="off">
                                @error('city')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            {{-- Provinsi --}}
                            <div class="mb-3">
                                <label for="province">Province</label>
                                <input value="{{old('province')}}" type="text" name="province" id="province" class="form-control @error('province') is-invalid @enderror" placeholder="Province..." autocomplete="off">
                                @error('province')
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