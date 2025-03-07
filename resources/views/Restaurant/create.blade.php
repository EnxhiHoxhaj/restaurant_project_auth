<!-- resources/views/restaurant/create.blade.php -->

<form action="{{ route('admin.restaurants.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="address">Indirizzo:</label>
    <input type="text" id="address" name="address" required><br>

    <button type="submit">Crea</button>
</form>
