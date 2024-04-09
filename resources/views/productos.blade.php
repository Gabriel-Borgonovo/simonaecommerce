@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1 class="text-center">Página de productos</h1>

    <div class="container">
    <section class="row mt-5">
    @forelse ($products as $product)
        <article class="col-6 col-lg-3 d-flex flex-column card-index mb-3">

            <a href="{{ route('showProduct', ['productId' => $product->id, 'productCategory' => $product->category]) }}" class="text-reset text-decoration-none">
                <img src="/imgs/{{ isset($product->main_img) ? $product->main_img : 'default-image.jpg' }}" alt="imagen" class="img-card-index img-fluid"/>
                <div>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->short_detail }}</p>
                    <small>$ <b class="text-secondary text-decoration-line-through">{{ $product->old_price }}</b> ARS</small>
                    <small class="fs-5">$ <b class="text-warning-emphasis">{{ $product->current_price }}</b> ARS</small>
                    <p class="mt-2 btn btn-warning fw-regular text-secondary-emphasis">Agregar al carrito</p>
                </div>
            </a>
        
        </article>

    @empty
        <p class="ps-5">No hay productos cargados en el sistema</p> 
    @endforelse

    </section>

        <div class="d-flex flex-column justify-content-center align-items-center my-5 color-success">
            {{ $products->links('pagination::bootstrap-5') }}  
        </div>

        
    </div>

@endsection