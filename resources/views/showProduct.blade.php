@extends('layouts.plantilla')

@section('name', '{{ $product->name }}')

@section('title', 'Home')

@php
    // Decode the detail_imgs JSON string into an array
    $detailImgs = json_decode($product->detail_imgs, true);
    $colors = json_decode($product->colors, true);
@endphp

@section('content')

<div class="container overflow-hidden">
    
    <div class="row my-5 justify-content-center">
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
            <p class="px-3 w-75"><b>Colores disponibles:</b>
            @foreach($colors as $color)
             {{ $color }} |
            @endforeach
            </p>
            <p class="px-3"><b>Stock:</b> {{ $product->stock}}</p>
            <p class="px-3">Precio anterior: $ {{ $product->old_price }}</p>
            <p class="px-3 fs-2 fw-bold">$ {{ $product->current_price }} <small class="text-danger fs-5">%{{ intval($product->discount)}} OFF</small></p>
            <button class="ms-3 btn btn-success" onclick="enviarMensaje()">Comprar producto</button>
            
            <div class="d-flex flex-column justify-content-end position-absolute bottom-0 top-lg-0 end-0 p-2 bg-light rounded shadow">
                <h3 class="title-share-btns">Compartir</h3>
                @php
                    $pId = Crypt::encrypt($product->id);
                    $pCategory = $product->category;
                    $whatsapp_message = $product->name . ' - ' . route('showProduct', ['productId' => $pId, 'productCategory' => $pCategory]);
                    $encoded_whatsapp_message = rawurlencode($whatsapp_message);
                    $image_url = 'https://modasimona.mi-rio2.com/imgs/' . $product->main_img; 
                    $encoded_image_url = urlencode($image_url);

                       
                    // Variables necesarias para el enlace de Facebook
                    $facebook_url = route('showProduct', ['productId' => $pId, 'productCategory' => $pCategory]);

                    // Variable necesaria para la imagen de Instagram
                    $image_url = 'https://modasimona.mi-rio2.com/imgs/' . $product->main_img; 
                @endphp

                {{-- whatsapp button --}}
                <a href="whatsapp://send?text={{ $encoded_whatsapp_message }}&?image={{ $encoded_image_url }}" data-action="share/whatsapp/share" class="btn text-reset d-flex flex-column justify-content-center align-items-center p-1 d-lg-none">
                    <img src="/imgs/whatsapp.svg" alt="icono whatsapp" class="icono-share-width p-0">
                    <span class="text-share-btns p-0">Whatsapp</span>
                </a>

                {{-- facebook button --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $facebook_url }}" target="_blank" class="btn text-reset d-flex flex-column justify-content-center align-items-center p-1">
                    <img src="/imgs/facebook.svg" alt="icono facebook" class="icono-share-width p-0">
                    <span class="text-share-btns p-0">Facebook</span>
                </a>
                
                {{-- instagram button --}}
                <a href="https://www.instagram.com/?url={{ $facebook_url }}&media={{ $image_url }}&caption={{ $product->name }}" target="_blank" class="btn text-reset d-flex flex-column justify-content-center align-items-center p-1">
                    <img src="/imgs/instagram.svg" alt="icono instagram" class="icono-share-width p-0">
                    <span class="text-share-btns p-0">Instagram</span>
                </a>

            </div>
        </section>
    </div>


    
</div>


{{-- productos relacionados --}}

    <h2 class="text-center mt-5 py-3">Productos relacionados</h2>
    <section class="container overflow-hidden mt-3 d-flex justify-content-start align-items-start width-related-products position-relative">

         {{-- buttons --}}
         <div class="btns-related-products">
            <img src="/imgs/chevron-left.svg" alt="izquierda" id="left">
            <img src="/imgs/chevron-rigth.svg" alt="derecha" id="right">
        </div>
        <div class="wrapper">
            
        <ul class="carousel" >
        @forelse($relatedProducts as $product2)

           

            <li class="card position-relative overflow-hidden shadow">
                <a href="{{ route('showProduct', ['productId' => Crypt::encrypt($product2->id), 'productCategory' => $product->category]) }}" class="text-reset text-decoration-none d-flex flex-column justify-content-start align-items-start h-100 bg-dark">
                    <div class="img">
                        <img src="/imgs/{{ $product2->main_img }}" alt="imagen carrousel" draggable="false">
                    </div>
                    <div class="px-3 text-light d-flex flex-column jusify-content-between w-100 h-100">
                        <div class="h-fix">
                           <h2 class="fs-5 h-fix-title">{{ $product2->name }}</h2>
                            <p>Categoría: <span class="badge text-bg-primary">{{ $product2->category }}</span></p>
                        </div>
                        <p class="mt-2 btn btn-warning fw-regular">Ver más</p>
                    </div>
                    
                    
                </a>
                
            </li>

        @empty
            <li>No se encontraron productos relacionados.</li>
        @endforelse
        </ul>
        
        </div>
    </section>
    

@section('scripts')
    <script src="{{ asset('assets/js/detailImgs.js')}}" ></script>
    <script src="{{ asset('assets/js/cardCarrousel.js')}}"></script>
@endsection
@endsection



<script>
    function enviarMensaje() {
        let nombreProducto = "{{ $product->name }}";
        let imagenProducto = "{{ asset('imgs/' . $product->main_img) }}";
        let urlProducto = "{{ route('showProduct', ['productId' => $pId, 'productCategory' => $product->category]) }}";
        let telefonoWhatsApp = "{{ env('WHATSAPP_PHONE_NUMBER') }}"; // Obtener el número de teléfono desde .env
    
        // Crear el mensaje de WhatsApp con el enlace al producto y la imagen
        let mensaje = "¡Hola! Estoy interesad@ en comprar el producto '" + nombreProducto + "'.";
        mensaje += "\n Podría darme más info? \n";
        mensaje += "link del producto: " + urlProducto;
        mensaje += "\n Imagen del producto: " + imagenProducto;
    
        // Codificar el mensaje para que se pueda enviar correctamente en la URL
        let mensajeCodificado = encodeURIComponent(mensaje);
    
        // Abrir la ventana de chat de WhatsApp con el mensaje predefinido
        window.open("https://wa.me/" + telefonoWhatsApp + "/?text=" + mensajeCodificado, "_blank");
    }
</script>

