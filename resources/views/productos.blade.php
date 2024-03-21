@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1 class="text-center">Página de productos</h1>


    @forelse ($products as $product)

        <h2>{{ $product->name }}</h2>
        @php
                                // Decode the detail_imgs JSON string into an array
                                $detailImgs = json_decode($product->detail_imgs, true);
                            @endphp

                            <a href="{{ route('showProduct', encrypt($product->id)) }}" class="text-reset text-decoration-none">
                                <img src="{{ isset($detailImgs[0]) ? $detailImgs[0] : 'default-image.jpg' }}" alt="imagen" class="img-card-index img-fluid"/>
                            </a>

    @empty
        <p class="ps-5">No hay productos cargados en el sistema</p> 
    @endforelse

@endsection