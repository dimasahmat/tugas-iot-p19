<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devices</title>
</head>

<body>
    <h1>Devices</h1>
    <ul>
        @foreach ($devices as $device)
            <li><a href="{{ url('/device/' . $device->id) }}">{{ $device->name }}</a></li>
        @endforeach
    </ul>
</body>

</html>
