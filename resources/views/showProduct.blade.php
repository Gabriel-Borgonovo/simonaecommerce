@extends('layouts.plantilla')

@section('name', '{{ $product->name }}')

@section('title', 'Home')

@php
    // Decode the detail_imgs JSON string into an array
    $detailImgs = json_decode($product->detail_imgs, true);
    $colors = json_decode($product->colors, true);
@endphp

@section('content')

<div class="container">
    
    <div class="row mt-5">
        <section class="col-12 col-lg-7 row img-detail-grid row">

            <div class="col-12 col-lg-3 js-imgs gap-3 gap-lg-2 order-2 order-lg-0 d-flex flex-row flex-lg-column mt-3 mt-lg-0 flex-wrap">

                @foreach($detailImgs as $index => $img)
                    <img src="/imgs/{{ $img }}" alt="imagen" class="img-mini{{ $index === 0 ? ' img-active' : '' }}" />
                @endforeach
            </div>

            <div class="main-img-detail col-12 col-lg-9 js-main-img overflow-hidden rounded shadow">
                <img src="/imgs/{{ $product->main_img }}" alt="imagen" class="img-fluid img-main" />
            </div>
            
        </section>
        <section class="col-12 col-lg-5">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->complete_detail }}</p>
            <p><b>Talle:</b> {{ $product->size }}</p>
            <p><b>Colores disponibles:</b>
            @foreach($colors as $color)
             {{ $color }} |
            @endforeach
            </p>
            <p><b>Stock:</b> {{ $product->stock}}</p>
            <p>Precio anterior: $ {{ $product->old_price }}</p>
            <p class="fs-2 fw-bold">$ {{ $product->current_price }} <small class="text-danger fs-5">%{{ intval($product->discount)}} OFF</small></p>
            <button class="btn btn-success">Comprar producto</button>
            <p>Compartir</p>
            
        </section>
    </div>


    {{-- productos relacionados --}}
    <h2 class="text-center mt-5">Productos relacionados</h2>
    <section class="mt-3 d-flex justify-content-center align-items-center width-related-products position-relative">

         {{-- buttons --}}
         <div class="btns-related-products">
            <img src="/imgs/chevron-left.svg" alt="izquierda" id="left">
            <img src="/imgs/chevron-rigth.svg" alt="derecha" id="right">
        </div>
        <div class="wrapper">
            
        <ul class="carousel" >
        @forelse($relatedProducts as $product)

           

            <li class="card">
                <a href="{{ route('showProduct', ['productId' => $product->id, 'productCategory' => $product->category]) }}" class="text-reset text-decoration-none">
                <div class="img">
                    <img src="/imgs/{{ $product->main_img }}" alt="imagen carrousel" draggable="false">
                </div>
                <div>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->short_detail }}</p>
                    <span>Categoría: <b>{{ $product->category }}</b></span>
                </div>
                </a>
            </li>

        @empty
            <li>No se encontraron productos relacionados.</li>
        @endforelse
        </ul>
        
        </div>
    </section>
</div>

@section('scripts')
    <script src="{{ asset('assets/js/detailImgs.js')}}" ></script>
    <script src="{{ asset('assets/js/cardCarrousel.js')}}"></script>
@endsection
@endsection