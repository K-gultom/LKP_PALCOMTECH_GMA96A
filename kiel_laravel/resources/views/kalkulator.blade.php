@extends('main')
@section('title')
    Kalkulator
@endsection

@section('content')
<style>
    .row{
        margin-top: 25px;
        justify-content: center;
    }
    form{
        background-color: rgb(152, 152, 152);
    }
</style>
    <div class="">
        <div class="row">
            <div class="col-6 mx-5">
                <form action="" method="post" class="border text-light p-5">
                    @csrf

                    <h2 class="text-center">Kalkulator Sederhana</h2>
                    <div class="mb-3">
                        <label for="input1" class="form-label">Masukkan Nilai A</label>
                        <input type="text" class="form-control" name="input1" id="input1">
                    </div>
                    <div class="mb-3">
                        <label for="operator" class="form-label">Operator (+, -, *, /)</label>
                        <input type="text" class="form-control" name="operator" id="operator">
                    </div>
                    <div class="mb-3">
                        <label for="input2" class="form-label">Masukkan Nilai B</label>
                        <input type="text" class="form-control" name="input2" id="input2">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <h5>Hasil: {{ $hasil }}</h5>
                </form>
            </div>
        </div>
    </div>    

@endsection