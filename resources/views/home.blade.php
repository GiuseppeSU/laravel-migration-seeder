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
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>{{ $train->aziende }}</th>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td class="w-25">{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->partenza }}</td>
                                <td>{{ $train->arrivo }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

    </div>

@endsection
