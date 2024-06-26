<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($product))
        <!-- Etiquetas Open Graph -->
        <meta property="og:title" content="{{ $product->name }}" />
        <meta property="og:description" content="{{ $product->short_detail }}" />
        <meta property="og:image" content="https://modasimona.mi-rio2.com/imgs/{{ $product->main_img }}" />
        <meta property="og:url" content="{{ route('showProduct', ['productId' => $pId, 'productCategory' => $pCategory]) }}" />
        <!-- Fin de etiquetas Open Graph -->
    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('styles')
    
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layouts._partials.buscador')
    @include('layouts._partials.menu')
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    @include('layouts._partials.footer')
    @yield('scripts')
</body>
</html>