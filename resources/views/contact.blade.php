@extends('master')

@section('content')
    <h1>CONTACT</h1>
    <p>{{ $name }}

        @if ($name != 'Octavio')
            Tu nombre no es Octavio
        @else
            <h2>Tu nombre es Octavio</h2>
        @endif

    <ul>
        @foreach ([1, 2, 3, 4, 5] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection
