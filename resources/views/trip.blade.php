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
    <div class="container">
        <div class="row">
            @foreach ($allTrips as $trip)
                <div class="col-6">
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{ $trip->img}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $trip->description }}</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted"></small></p>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>


    </div>

</body>
</html>