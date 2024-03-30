@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')

  @if (isset($searchQuery))
    <h1 class="fs-5 text-center fw-normal text-secondary mt-5">Resultados de: "<b>{{ $searchQuery }}</b>"</h1>

    @if ($products->isEmpty())
      <div class="min-vh-50 d-flex flex-column justify-content-center justify-content-lg-start align-items-center">
        <div class="mt-5 text-center overflow-hidden">
          
          <div class="p-2 animation-move">
            <img src="/imgs/alert.svg" alt="logo" class="img-fluid icon-alert">
            <h2 class="fw-normal fs-5 text-secondary">No se encontraron productos con: "{{ $searchQuery }}"</h2>
          </div>
          
          <a href="{{ route('index') }}" class="btn btn-warning mt-5">Volver</a>
        </div>
      </div>
      
    @else
      @foreach ($products as $product)

        @php
          // Decode the detail_imgs JSON string into an array
          $detailImgs = json_decode($product->detail_imgs, true);
        @endphp
        <a href="{{ route('showProduct', ['productId' => $product->id, 'productCategory' => $product->category]) }}" class="text-reset text-decoration-none">
          <section class="m-auto row bg-light shadow border rounded my-3">
            
            <div class="col-12 col-sm-4">
              <img src="{{ $detailImgs[0] }}" alt="img-searched" class="img-fluid" />
            </div>
            <div class="col-12 col-sm-8">
              <h3 class="pt-3">{{ $product->name }}</h3>
              <p>{{ $product->short_detail }}</p>
              <div>
                <small>$ <b class="text-secondary text-decoration-line-through">{{ $product->old_price }}</b> ARS</small>
                <small class="fs-5">$ <b class="text-warning-emphasis">{{ $product->current_price }}</b> ARS</small>
              </div>
              <p class="mt-2 btn btn-warning fw-regular text-secondary-emphasis">Agregar al carrito</p>
            </div>
            
          </section>
        </a>

        @endforeach

        <div class="d-flex flex-column justify-content-center align-items-center my-5 color-success">
          {{ $products->links('pagination::bootstrap-5') }}  
        </div> 
    @endif

  @else
    <h1>Todos los productos</h1>

    @foreach ($products as $product)
      @endforeach

    {{ $products->links() }}  @endif

@endsection