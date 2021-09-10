<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>Laravel migration seeder</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mb-4 bg-success text-white">
                <h1>Tante mete intorno al mondo.</h1>
                <h2>Viaggi di gruppo e tour organizzati per vivere esperienze uniche con i nostri coordinatori.</h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">

        <h2>Tutti i viaggi:</h2>

        <div class="row">
            @foreach ($allTrips as $trip)
                <div class="col-sm-12 col-md-6 col-xl-4  d-flex align-items-stretch">
                    <div class="card mb-4">
                        <img src="{{ $trip->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $trip->description }}</h3>
                            <p class="card-text"><span class="font-weight-bold">Price: </span>{{ $trip->price }}</p>
                            <p class="card-text"><span class="font-weight-bold">Durata: </span>{{ $trip->durations }}</p>
                            <p class="card-text"><span class="font-weight-bold">Partenza: </span>{{ $trip->departure }}</p>
                            <p class="card-text"><span class="font-weight-bold">Itinerario: </span>{{ $trip->itinerary }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <div class="container">

        <h2>Europa:</h2>
        <div class="row">
            @foreach ($TripsEurope as $trip)
                <div class="col-6 d-flex align-items-stretch">
                    <div class="card mb-5">
                        <img src="{{ $trip->img}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $trip->description }}</h3>
                            <p class="card-text"><span class="font-weight-bold">Price: </span>{{ $trip->price }}</p>
                            <p class="card-text"><span class="font-weight-bold">Durata: </span>{{ $trip->durations }}</p>
                            <p class="card-text"><span class="font-weight-bold">Partenza: </span>{{ $trip->departure }}</p>
                            <p class="card-text"><span class="font-weight-bold">Itinerario: </span>{{ $trip->itinerary }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</body>
</html>