@extends('layouts.app')

@section('page-title', 'Train')

@section('content')
    <div class="row">
        @foreach ($trains as $train)
            <div class="col">
                <h1>{{ $train->aziende }}</h1>

            </div>
        @endforeach

    </div>
@endsection
