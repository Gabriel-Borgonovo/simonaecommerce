<div class="slider">
    <div class="slider-slides">
        <div class="slider-slide activado d-flex justify-content-between overflow-hidden">
            <div class="align-self-center w-100 d-flex flex-column align-items-start">
                <h4 class="display-3 text-start"><b class="text-warning">Simona</b> Ecommerce</h4>
                <h5 class="text-start">Tienda de indumentaria y moda</h5>  
                <p class="text-start">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis voluptates optio cupiditate iste at iusto, aliquid earum, commodi qui ea nisi explicabo debitis reiciendis sunt libero velit sint consequuntur.</p>
                <button class="btn btn-warning">Ver productos</button>
            </div>
            
            <img src="/imgs/slider1.jpg" alt="1" class="d-none d-lg-block">
        </div>

        <div class="slider-slide bg-primary text-light rounded">
            <h4>Diapositiva 2</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque neque, minima cumque magni quo magnam accusantium, dignissimos consequuntur tempore optio laborum molestiae iste! Pariatur possimus, odit asperiores tempora ipsa ratione.</p>
        </div>

        <div class="slider-slide">
            <h4>Diapositiva 3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id adipisci mollitia dolor, dicta unde soluta quos nulla quibusdam. Officiis nemo temporibus quos ullam corporis perferendis fuga. Esse est natus vel.</p>
        </div>

        <div class="slider-slide">
            <h4>Diapositiva 4</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque neque, minima cumque magni quo magnam accusantium, dignissimos consequuntur tempore optio laborum molestiae iste! Pariatur possimus, odit asperiores tempora ipsa ratione.</p>
        </div>
    </div>

    {{-- botones --}}
    <div class="slider-btns">
        <a href="#" class="prev">
            <img src="/imgs/chevron-left.svg" alt="left">
        </a>
        <a href="#" class="next">
            <img src="/imgs/chevron-rigth.svg" alt="rigth">
        </a>
    </div>

    <!-- Botones indicadores -->
    <div class="slider-indicators">
        <!-- Agrega un botón indicador por cada diapositiva -->
    </div>
</div>

@section('scripts')
    <script src="{{ asset('assets/js/main.js')}}" type="module"></script>
@endsection