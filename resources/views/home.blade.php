<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!-- Tabella contenente tutti i treni -->
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Compagnia di Viaggio</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">ID</th>
                    <th scope="col">Numero di carrozze</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $info)
                    <tr>
                        <td>{{ $info->company }}</td>
                        <td>{{ $info->departure_station }}</td>
                        <td>{{ $info->arrival_station }}</td>
                        <td>{{ $info->departure_time }}</td>
                        <td>{{ $info->arrival_time }}</td>
                        <td>{{ $info->train_id }}</td>
                        <td>{{ $info->carriages_number }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- /Tabella contenente tutti i treni -->
        <!--Treni in partenza oggi-->
        <div class="container d-flex my-5">
            @foreach ($train as $item)
                <div class="card mx-3" style="width: 18rem;">
                    <div class="card-header">
                        Compagnia di viaggio : {{ $item->company }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Partenza da : {{ $item->departure_station }}</li>
                        <li class="list-group-item">Arrivo a : {{ $item->arrival_station }}</li>
                        <li class="list-group-item">Partenza alle : {{ $item->departure_time }}</li>
                        <li class="list-group-item">Arrivo alle : {{ $item->arrival_time }}</li>
                        <li class="list-group-item">Id del treno: <strong>{{ $item->train_id }}</li>
                        <li class="list-group-item">Numero di carrozze {{ $item->carriages_number }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
        <!--/Treni in partenza oggi-->
    </div>
</body>

</html>
