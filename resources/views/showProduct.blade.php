@extends('layouts.plantilla')

@section('title', 'Home')

@php
    // Decode the detail_imgs JSON string into an array
    $detailImgs = json_decode($product->detail_imgs, true);
@endphp

@section('content')

<div class="container">
    
    <div class="row mt-5">
        <section class="col-12 col-lg-7 row img-detail-grid row">

            <div class="col-12 col-lg-3 js-imgs gap-3 gap-lg-2 order-2 order-lg-0 d-flex flex-row flex-lg-column mt-3 mt-lg-0 flex-wrap">

                @foreach($detailImgs as $index => $img)
                    <img src="{{ $img }}" alt="imagen" class="img-mini{{ $index === 0 ? ' img-active' : '' }}" />
                @endforeach
            </div>

            <div class="main-img-detail col-12 col-lg-9 js-main-img overflow-hidden rounded shadow">
                <img src="{{ $detailImgs[0] }}" alt="imagen" class="img-fluid img-main" />
            </div>
            
        </section>
        <section class="col-12 col-lg-5">
            <h1>Detalle del producto: {{ $product->name }}</h1>
        </section>
    </div>
</div>

@section('scripts')
    <script src="{{ asset('assets/js/detailImgs.js')}}" ></script>
@endsection
@endsection