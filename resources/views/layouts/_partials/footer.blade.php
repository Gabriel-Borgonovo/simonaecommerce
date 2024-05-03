<div class="min-vh-50 bg-dark mt-5 d-flex flex-column justify-content-between align-items-center pb-3">
    <section class="d-flex justify-content-center gap-5 mt-5 flex-wrap">
    <div class="text-light">
        <h2 class="fs-4 text-warning">Links del sitio web</h2>
        <ul class="ls-none">
            <li><a href="{{ route('index') }}" class="text-reset text-decoration-none">Home</a></li>
            <li><a href="{{ route('productos') }}" class="text-reset text-decoration-none">Productos</a></li>
            <li><a href="{{ route('nosotros') }}" class="text-reset text-decoration-none">Nosotros</a></li>
           
        </ul>
    </div>

    <div class="text-light">
        <h2 class="fs-4 text-warning">Redes</h2>
        <ul class="ls-none">
            <li><a href="{{ route('index') }}" class="text-reset text-decoration-none"><i class="bi bi-facebook fs-3"></i></a></li>
            <li><a href="{{ route('productos') }}" class="text-reset text-decoration-none"><i class="bi bi-instagram fs-3"></i></a></li>
        </ul>
    </div>

    <div class="text-light" id="contacto-data">
        <h2 class="fs-4 text-warning">Contacto</h2>
        <a href="https://api.whatsapp.com/send?phone={{ env('WHATSAPP_PHONE_NUMBER') }}" class="btn btn-success" target="_blank">Enviar Whatsapp</a>
    </div>

    </section>
    <div>
        <small class="text-light">&copy; Página diseñada por Gabriel Alejandro Borgonovo</small>
    </div>
</div>