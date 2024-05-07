<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Example</title>
</head>
<body>
    <h1>Spotify Example</h1>

    <h2>Tracks by Playboi Carti:</h2>
    <ul>
        @foreach ($tracks as $track)
            <li>{{ $track['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
