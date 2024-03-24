@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')

  @if (isset($searchQuery))
    <h1>Resultados de búsqueda para "{{ $searchQuery }}"</h1>

    @if ($products->isEmpty())
      <p>No se encontraron productos con el criterio de búsqueda "{{ $searchQuery }}"</p>
    @else
      @foreach ($products as $product)
        @endforeach

      {{ $products->links() }}  @endif

  @else
    <h1>Todos los productos</h1>

    @foreach ($products as $product)
      @endforeach

    {{ $products->links() }}  @endif

@endsection