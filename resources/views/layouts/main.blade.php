<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="antialiased">
    <header class="fixed">
        <nav class="navbar" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/tayouzaenvents_logo.png" alt="Tayouza Events">
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a href="/" class="nav-link link-dark">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link link-dark">Criar Eventos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        Tayouza Events &copy; 2022
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>