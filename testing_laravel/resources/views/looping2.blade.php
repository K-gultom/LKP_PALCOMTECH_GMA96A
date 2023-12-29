@extends('main')
@section('title')
    Looping 2
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

                    <h2 class="text-center">Looping Nilai</h2>
                    <div class="mb-3">
                        <label for="input1" class="form-label">Masukkan Nilai A</label>
                        <input type="text" class="form-control" name="input1" id="input1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    @for($a; $a <= $b; $a++)
                        <ul>
                            <li>Nilai ke : {{ $a }}</li>
                        </ul>
                    @endfor
                </form>
            </div>
        </div>
    </div>    

@endsection