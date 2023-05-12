@extends('layouts.app')

@section('page-title', 'Train')

@section('content')
    <div class="row">
        @foreach ($trains as $train)
            <div class="col">
                <h1>Azienda:{{ $train->aziende }}</h1>
                <h1>Partenza:{{ $train->stazione_di_partenza }}</h1>

            </div>
        @endforeach

    </div>
@endsection
