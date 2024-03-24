@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    @include('_components.portada')


    <div class="container min-vh-100 mt-5">
        <h1 class="text-center">Página de Inicio</h1>
        <section class="row">
            <article class="col-12 col-lg-3 my-5">
                <div class="border rounded shadow bg-ligth">
                    <h2 class="text-center">Filtros</h2>
                    <div class="ps-5">
                        <h3 class="fw-normal fs-5">Por prendas</h3>
                        <h3 class="fw-normal fs-5">Por marcas</h3>
                    </div> 
                </div> 
            </article>

            
            <div class="col-12 col-lg-9 my-5">
               <div class="bg-ligth border rounded shadow row">
                    <h2 class="text-center">Productos</h2>
                    @forelse ($products as $product)
                        <article class="col-6 col-lg-3 d-flex flex-column card-index mb-3">

                            @php
                                // Decode the detail_imgs JSON string into an array
                                $detailImgs = json_decode($product->detail_imgs, true);
                            @endphp

                            <a href="{{ route('showProduct', $product->id) }}" class="text-reset text-decoration-none">
                                <div class="position-relative">
                                    <img src="{{ isset($detailImgs[0]) ? $detailImgs[0] : 'default-image.jpg' }}" alt="imagen" class="img-card-index img-fluid"/>
                                    <div class="triangle-offer bg-danger text-light">-30% OFF</div>
                                </div>
                            
                                <div class="d-flex flex-column">
                                    <h5>{{ $product->name }}</h5>
                                    <p class="fs-small">{{ $product->short_detail }}</p>
                                    <small>$ <b class="text-secondary text-decoration-line-through">{{ $product->old_price }}</b> ARS</small>
                                    <small class="fs-5">$ <b class="text-warning-emphasis">{{ $product->current_price }}</b> ARS</small>
                                    <p class="mt-2 btn btn-warning fw-regular text-secondary-emphasis">Agregar al carrito</p>
                                </div>
                            </a>
                        </article>
                    @empty
                    <p class="ps-5">No hay productos cargados en el sistema</p> 
                    @endforelse
                </div> 
            </div>
        
        </section>
    </div>
    

@endsection