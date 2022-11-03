home.blade.php

@extends('template')

@section('title', 'Blade Feature')

@section('content')
    <div>
        @for ($i = 1; $i <= 15; $i++)
            @if ($i < 15 )
               <p> {{$i}} STEP : Do Believe in ourselves  <p>
            @elseif ($i == 15)
                <p> RESULT : WE DID IT !!! </p>
            @endif
        @endfor
    </div>
@endsection
