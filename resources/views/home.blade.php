@extends('layouts.app')

@section('page-title', 'Train')

@section('content')
    <div class="row">
        @foreach ($trains as $train)
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col text-danger">Azienda</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">arrivo</th>
                            <th scope="col">Orario partenza</th>
                            <th scope="col">Orario Arrivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $train->aziende }}</th>
                            <td>{{ $train->stazione_di_partenza }}</td>
                            <td>{{ $train->stazione_di_arrivo }}</td>
                            <td>{{ $train->partenza }}</td>
                            <td>{{ $train->arrivo }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection
