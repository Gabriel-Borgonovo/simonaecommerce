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

            <article class="col-12 col-lg-9 my-5">
               <div class="bg-ligth border rounded shadow">
                    <h2 class="text-center">Productos</h2>
                    @forelse ($products as $product)
                        
                    @empty
                    <p class="ps-5">No hay productos cargados en el sistema</p> 
                    @endforelse
                </div> 
            </article>
            
        </section>
    </div>
    

@endsection