<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container bg-primary-subtle vh-100">
        <div class="row">
            <div class="col text-center">
                <h1 class="my-5 fw-bold">Shop</h1>
                <p class="fw-medium fst-italic">Guarda il nostro catalogo e trova quello che fa per te!</p>
                
                <a href="{{ route('catalog') }}">
                    <button type="button" class="btn btn-outline-light btn-lg mt-5">Vai al Catalogo</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>