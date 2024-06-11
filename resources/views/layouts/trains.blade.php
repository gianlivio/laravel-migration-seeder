@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Treni</h1>

        <ul>

            @foreach ($trains as $train)

                <li>Compagnia: {{ $train->company }}</li>
                <li>Stazione di Partenza: {{ $train->departure }}</li>
                <li>Stazione di Arrivo: {{ $train->arrival }}</li>
                <li>Orario di Partenza: {{ $train->departure_time }}</li>
                <li>Orario di Arrivo: {{ $train->arrival_time }}</li>
                <li>Codice Treno: {{ $train->train_code }}</li>
                <li>Numero Carrozze: {{ $train->carriages_number }}</li>
                <li>In Orario: {{ $train->on_time ? 'Sì' : 'No' }}</li>
                <li>Cancellato: {{ $train->cancelled ? 'Sì' : 'No' }}</li>
                    
            @endforeach

        </ul>

    </div>

@endsection