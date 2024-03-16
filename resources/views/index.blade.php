@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    @include('_components.portada')


    <div class="container min-vh-100 mt-5">
        <h1 class="text-center">Página de Inicio</h1>
        <section class="row">
            <article class="col-12 col-lg-3 bg-info">
                <h2 class="text-center">Filtros</h2>
                <div class="ps-5">
                    <h3>Por prendas</h3>
                    <h3>Por marcas</h3>
                </div>
            </article>

            <article class="col-12 col-lg-9 bg-warning">
                <h2 class="text-center">Productos</h2>
            </article>
        </section>
    </div>
    

@endsection