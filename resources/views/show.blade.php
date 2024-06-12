<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Device Logs</title>
</head>

<body>
    <h1>{{ $device->name }}</h1>
    <h2>Logs</h2>
    <ul>
        @foreach ($device->logs as $log)
            <li>{{ $log->log_time }}: {{ $log->data }}</li>
        @endforeach
    </ul>
    <a href="{{ url('/') }}">Back to Devices</a>
</body>

</html>
