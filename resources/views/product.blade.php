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
            <div class="col">
                <a href="{{ route('catalog') }}">
                    <button type="button" class="btn btn-outline-light btn-lg mt-3">
                        Catalogo
                    </button>
                </a>
                <div class="mx-5">
                    <h1 class="mt-4">{{ $product['name'] }}</h1>

                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item flex-fill">Categoria: <span class="fw-bolder">{{ $product['category'] }}</span></li>
                            <li class="list-group-item flex-fill">Brand: <span class="fw-bolder">{{ $product['brand'] }}</span></li>
                            <li class="list-group-item flex-fill">Prezzo: <span class="fw-bolder">{{ $product['price'] }}$</span></li>
                        </ul>

                    <p class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Libero consequatur repellat odit exercitationem porro necessitatibus,
                        beatae iste dolorem voluptate explicabo totam eum labore nisi!
                        Nam qui voluptas accusamus fugiat sequi.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>