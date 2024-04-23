@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <div class="min-vh-100">

    <h1 class="text-center">Filtrado por {{ $valor }}</h1>

    @foreach ($productosFiltrados as $productFiltrado)
        {{-- <p>Prenda: {{ $productFiltrado->product }} | marca: {{ $productFiltrado->brand }} </p> --}}
        @php
        $pId = Crypt::encrypt($productFiltrado->id);
        $pCategory = $productFiltrado->category;
      @endphp
      <a href="{{ route('showProduct', ['productId' => $pId , 'productCategory' => $pCategory]) }}" class="text-reset text-decoration-none">
        <section class="m-auto row bg-light shadow border rounded my-3 height-filter-card">
          
          <div class="col-12 col-sm-4">
            <img src="/imgs/{{ $productFiltrado->main_img }}" alt="img-searched" class="img-fluid height-filter-card" />
          </div>
          <div class="col-12 col-sm-8 d-flex flex-column justify-content-between">
            <div>
                <h3 class="pt-3">{{ $productFiltrado->name }}</h3>
                <p>{{ $productFiltrado->short_detail }}</p>
                <p><b>Filtro:</b> <small class="badge text-bg-primary">{{ $productFiltrado->product}}</small></p>
                <div>
                    <small>$ <b class="text-secondary text-decoration-line-through">{{ $productFiltrado->old_price }}</b> ARS</small>
                    <small class="fs-5">$ <b class="text-warning-emphasis">{{ $productFiltrado->current_price }}</b> ARS</small>
                </div>
            </div>
            <p class="mt-2 btn btn-warning fw-regular text-secondary-emphasis">Agregar al carrito</p>
          </div>
          
        </section>
      </a>

    </div>
    @endforeach
@endsection