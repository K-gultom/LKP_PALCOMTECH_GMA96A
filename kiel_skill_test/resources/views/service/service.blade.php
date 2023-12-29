@extends('home.main')
@section('title')
    Data Service
@endsection
@section('content')
    <div class="container-fluid mt-2 mb-4">
        <h4 class="mb-0">Data Service</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>    
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-1">
                        <strong>Data</strong> Service
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{url('/add/data/service')}}" class="btn btn-primary btn-sm"> 
                            <i class="bi bi-plus-circle"></i> Add Data Service
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Service</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>
                                    <img src="{{url('images')}}/{{$item->photo}}" class="img-fluid">
                                </td>
                                <td>{{$item->name}} </td>
                                <td>{{$item->category->name}} </td>
                                <td>{{number_format($item->price)}} </td>
                                <td>
                                    <a href="{{url('product-edit')}}/{{$item->id}} " class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <a href="{{route('delpro',['id' => $item->id]) }}}" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are You Sure ???');">
                                        <i class="bi bi-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>   
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>      
    </div>
@endsection