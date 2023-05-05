<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        @foreach ($trains as $train)
            <h1>Compagnia di viaggio : {{ $train->company }}</h1>
            <p>Partenza da : {{$train->departure_station}}</p>
            <p>Arrivo a : {{$train->arrival_station}}</p>
            <p>Arrivo a : {{$train->arrival_station}}</p>
            <p>Id del treno: <strong>{{$train->train_id}}</strong></p>
            <p>Numero di carrozze {{$train->carriages_number}}</p>
        @endforeach
    </div>
</body>

</html>
