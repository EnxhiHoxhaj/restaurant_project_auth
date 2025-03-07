<!-- resources/views/restaurant/index.blade.php -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Utenti</title>
</head>

<body>

    <h1>Elenco Utenti</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                <strong>{{ $user->name }}</strong> - {{ $user->email }}
            </li>
        @endforeach
    </ul>

</body>

</html>
