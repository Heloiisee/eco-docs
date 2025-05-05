<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éco-Docs</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.10/css/pico.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav>
    <ul>
        <li><strong>Éco-Docs</strong></li>
    </ul>
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('document.form') }}">Formulaire</a></li>
    </ul>
</nav>

<main class="container">
    @yield('content')
</main>
</body>
</html>
