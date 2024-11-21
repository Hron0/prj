<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Записываемя на ноготочки</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="display: flex; flex-direction: column; align-items:center;">
    <nav class="navbar navbar-expand-lg" style="background-color: gray; margin-bottom:20px; width: 100%;">
        <div class="container-fluid">
            {{-- Сюда фотку --}}
            <a class="navbar-brand" href="/">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item" style="padding-right: 25px">
                            <a type="button" href="/" class="btn btn-primary">Профиль</a>
                        </li>
                        <li class="nav-item" style="padding-right: 25px">
                            <a type="button" href="{{ route('logout') }}" class="btn btn-danger">Выход</a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item" style="padding-right: 25px">
                            <a type="button" href="{{ route('login') }}" class="btn btn-primary">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a type="button" href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('body')
</body>

</html>
