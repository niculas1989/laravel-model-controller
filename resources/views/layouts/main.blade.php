<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('css/app.css') }}"></script>
    <title>My Movies | @yield('title')</title>
</head>

<body>
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ALL FILMS</a>
            </li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>