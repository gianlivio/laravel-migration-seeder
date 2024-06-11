@extends('layouts.app')

@section('content')
    <div class="container">

        <h1> Lista Treni per Rende 2024</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Compagnia</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages_number }}</td>
                        <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancelled ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
