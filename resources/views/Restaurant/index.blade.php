<!-- resources/views/restaurant/index.blade.php -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Utenti</title>
</head>

<body>


    <h1>Elenco Ristoranti</h1>




    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <strong>{{ $restaurant->name }}</strong> - {{ $restaurant->email }}
                <a href="{{ route('admin.restaurants.show', $restaurant->id) }}">Dettagli</a>
                <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}">Modifica</a>
                <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>

</html>
