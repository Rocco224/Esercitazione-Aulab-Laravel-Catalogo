<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="nav bg-light">
    </nav>

    <div class="container bg-primary-subtle vh-100">
        <div class="py-3">
            <nav class="nav bg-light flex-row justify-content-between">
                <div class="d-flex">
                    <a class="nav-link" href="{{ route('catalog') }}">Catalogo</a>
                    @foreach ($categories as $category)
                    <a class="nav-link" href="{{ route('category', $category) }}">{{ ucfirst($category) }}</a>
                    @endforeach
                </div>
                <div>
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </div>
            </nav>
        </div>

        <div class="row">
            @foreach ($products as $id => $product)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <a href="{{ route('product', $id) }}">
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-header bg-primary">
                            {{ $product['category'] }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $product['brand'] }}</li>

                            <li class="list-group-item">{{ $product['name'] }}</li>

                            <li class="list-group-item">{{ $product['price'] }}</li>
                        </ul>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>