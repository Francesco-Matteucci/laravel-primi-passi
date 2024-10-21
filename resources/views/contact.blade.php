<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel First Step | {{ $pageTitle }}</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <header class="bg-light py-3 mb-4">
        <nav class="container">
            <ul class="nav justify-content-center">
                @foreach ($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $page['url'] }}">{{ $page['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>

<main>
    <div class="text-center">
    <h1>{{ $pageTitle }}</h1>
    <p>Sentiti libero di contattarci in qualsiasi momemnto.</p>
</div>
</main>

</body>
</html>
