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
    
    <div class="row my-5">
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
        <section class="col-12 col-lg-5 position-relative pt-5 p-lg-0">
            <h1 class="px-3">{{ $product->name }}</h1>
            <p class="px-3">{{ $product->complete_detail }}</p>
            <p class="px-3"><span><b>Talles:</b> {{ $product->size }}</span> <span class="ps-3"><b>Marca:</b> {{ $product->brand }}</span></p>
            <p class="px-3"><b>Colores disponibles:</b>
            @foreach($colors as $color)
             {{ $color }} |
            @endforeach
            </p>
            <p class="px-3"><b>Stock:</b> {{ $product->stock}}</p>
            <p class="px-3">Precio anterior: $ {{ $product->old_price }}</p>
            <p class="px-3 fs-2 fw-bold">$ {{ $product->current_price }} <small class="text-danger fs-5">%{{ intval($product->discount)}} OFF</small></p>
            <button class="px-3 btn btn-success">Comprar producto</button>
            
            <div class="d-flex flex-column justify-content-end position-absolute bottom-0 top-lg-0 end-0 p-2 bg-light rounded shadow">
                <h3 class="title-share-btns">Compartir</h3>
                @php
                    $pId = Crypt::encrypt($product->id);
                    $pCategory = $product->category;
                    $whatsapp_message = $product->name . ' - ' . route('showProduct', ['productId' => $pId, 'productCategory' => $pCategory]);
                    $encoded_whatsapp_message = rawurlencode($whatsapp_message);
                    $image_url = 'https://modasimona.mi-rio2.com/imgs/' . $product->main_img; 
                    $encoded_image_url = urlencode($image_url);
                @endphp

                <a href="whatsapp://send?text={{ $encoded_whatsapp_message }}&?image={{ $encoded_image_url }}" data-action="share/whatsapp/share" class="btn text-reset d-flex flex-column justify-content-center align-items-center p-1">
                    <img src="/imgs/whatsapp.svg" alt="icono whatsapp" class="icono-share-width p-0">
                    <span class="text-share-btns p-0">Whatsapp</span>
                </a>

                {{-- facebook button --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('showProduct', ['productId' => $pId, 'productCategory' => $pCategory]) }}" target="_blank" class="btn text-reset d-flex flex-column justify-content-center align-items-center p-1">
                    <img src="/imgs/facebook.svg" alt="icono whatsapp" class="icono-share-width p-0">
                    <span class="text-share-btns p-0">Facebook</span>
                </a>

            </div>
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
        @forelse($relatedProducts as $product2)

           

            <li class="card">
                <a href="{{ route('showProduct', ['productId' => Crypt::encrypt($product2->id), 'productCategory' => $product->category]) }}" class="text-reset text-decoration-none">
                <div class="img">
                    <img src="/imgs/{{ $product2->main_img }}" alt="imagen carrousel" draggable="false">
                </div>
                <div>
                    <h2>{{ $product2->name }}</h2>
                    <p>{{ $product2->short_detail }}</p>
                    <span>Categoría: <b>{{ $product2->category }}</b></span>
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