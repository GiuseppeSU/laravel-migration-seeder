@extends('layouts.app')

@section('page-title', 'Train')

@section('content')
    <div class="container">
        <div class="row ">

            @foreach ($trains as $train)
                <div class="col-12 text-center">
                    <table class="table table-bordered w-50 m-auto my-3 ">
                        <thead>
                            <tr class="text-danger">
                                <th scope="col">Azienda</th>
                                <th scope="col">Partenza</th>
                                <th scope="col">arrivo</th>
                                <th scope="col"> Partenza</th>
                                <th scope="col"> Arrivo</th>
                                <th scope="col"> Codice Treno</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>{{ $train->company }}</th>
                                <td>{{ $train->departure_station }}</td>
                                <td class="w-25">{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

    </div>

@endsection
