@extends('main')
@section('title')
    Persegi Panjang
@endsection

@section('content')
    <div>
        <h3>Menghitung Luas Persegi Panjang</h3> <br>
        <form action="" method="post">
            @csrf

            <label for="panjang">Panjang</label>
            <input type="text" name="panjang" id="">

            <label for="lebar">Lebar</label>
            <input type="text" name="lebar" id="">

            <button type="submit">Hitung</button>
        </form>

        <div class="row my-5">
            <h6> Luas Persegi Adalah: {{ $hitung }}  </h6>
        </div>
    </div>    
@endsection