@extends('layouts.plantilla')

@section('title', 'Home')

@php
    // Decode the detail_imgs JSON string into an array
    $detailImgs = json_decode($product->detail_imgs, true);
@endphp

@section('content')


    <h1>El Producto es: {{ $product->name }}</h1>
    <section>
        <img src="{{ $detailImgs[0] }}" alt="imagen" />
        <div>
            <img src="{{ $detailImgs[1] }}" alt="imagen" />
            <img src="{{ $detailImgs[2] }}" alt="imagen" />
            <img src="{{ $detailImgs[3] }}" alt="imagen" />
        </div>
    </section>
    

@endsection