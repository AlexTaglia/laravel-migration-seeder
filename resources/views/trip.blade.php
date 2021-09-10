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

    @foreach ($allTrips as $trip)
    <div class="pack">
        <h2>{{ $trip->description}}</h2>
    </div>

    @endforeach
</body>
</html>