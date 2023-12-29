@extends('main')

@section('title')
    Looping 1
@endsection

@section('content')

    {{-- {{ $hasil }} --}}
{{-- 
    @for ($i = 0; $i < 10; $i++)
        {{ $i }}
    @endfor --}}

   <ul>
        @foreach ($hasil as $item)
            <li>{{ $item }}</li>
        @endforeach
   </ul>

@endsection