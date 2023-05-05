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
        {{-- <table class="table">
            <thead>
              <tr>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">ID</th>
                <th scope="col">Numero di carrozze</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train )
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              @endforeach
            </tbody>
          </table> --}}
        @foreach ($train as $item)
            <h1>Compagnia di viaggio : {{ $item->company }}</h1>
            <p>Partenza da : {{$item->departure_station}}</p>
            <p>Arrivo a : {{$item->arrival_station}}</p>
            <p>Arrivo a : {{$item->arrival_station}}</p>
            <p>Id del treno: <strong>{{$item->train_id}}</strong></p>
            <p>Numero di carrozze {{$item->carriages_number}}</p>
        @endforeach
    </div>
</body>

</html>
