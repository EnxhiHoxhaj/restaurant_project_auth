<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titlePage')</title>
    <title>Ristorante Villino Nuovo</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')

    {{-- inclusione  --}}
    <link rel="stylesheet"
        href="C:/Users/elona/OneDrive/Desktop/PROGETTI PERSONALI\/estaurant_project_auth/resources/scss/app.scss">
</head>

<body>
    <section class="d-flex">
        <div>
            @include('partials.navbar')
            @include('partials.sidebar')
        </div>
        <div>

            @yield('content')
            @include('partials.footer')
        </div>

        {{-- @yield('hero') --}}
    </section>
</body>

</html>
