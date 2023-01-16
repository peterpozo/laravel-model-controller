<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex gap-5 container flex-wrap pt-5 justify-content-center">
        @foreach ($movies as $items)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h4 class="card-title">{{ $items->title }}</h4>
                <p class="card-text">Titolo originale: {{ $items->original_title }}</p>
                <p class="card-text">Nazionalità: {{ $items->nationality }}</p>
                <p class="card-text">Data di uscita: {{ $items->date }}</p>
                <p class="card-text">Voto: {{ $items->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
