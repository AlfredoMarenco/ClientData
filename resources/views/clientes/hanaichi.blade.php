@extends('layouts.contacto')
@section('title', 'Restaurante Hanaichi Mérida')
@section('description', 'Comida Japonesa tradicional, siempre buscando la mejor calidad en platillos y bebidas.')
@section('image', 'https://agenciavandu.com/img/hanaichi.jpg')
@section('content')
<header>
    <div class="container">
        <div class="titulo-cliente">
            <h1>Hanaichi Merida, Sushi & Sake Bar</h1>
            <p class="text-center">Adéntrate en un viaje gastronómico hacia la tierra del sol naciente en Hanaichi, un apasionado tributo a la auténtica cocina japonesa. Inspirados por siglos de tradición culinaria y un profundo respeto por los ingredientes frescos, que te invitan a descubrir un festín de sabores que cuentan historias de la cultura japonesa.</p>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                <figure>
                    <img src="{{asset('img/2023/hanaichi/Hanaichi-5.webp')}}" class="img-fluid" alt="Sushi">
                </figure>
                <figure>
                    <img src="{{asset('img/2023/hanaichi/Hanaichi-6.webp')}}" class="img-fluid" alt="Gyoza">
                </figure>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <figure>
                    <img src="{{asset('img/2023/hanaichi/Hanaichi-14.webp')}}" class="img-fluid" alt="Sapporo Light">
                </figure>
            </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12">
              <!--   <figure>
                    <img src="{{asset('img/2023/hanaichi/Hanaichi-10.webp')}}" class="img-fluid" alt="brindis con cocteles">
                </figure> -->
                <figure>
                    <img src="{{asset('img/2023/hanaichi/Hanaichi-13.webp')}}" class="img-fluid" alt="Hatcake logo">
                </figure>
            </div>
        </div>
        <div>
            <div class="text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="http://bit.ly/hanaichimid" target="_blank" class="btn btn-primary">Descargar contenido completo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapas mb-5">
            <div class="text-center pb-3">
                <h2>Ubicación</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.354707814557!2d-89.60969792502432!3d21.018488688131978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56772da4b97249%3A0xb4cf305b89812e7a!2sHanaichi!5e0!3m2!1ses-419!2smx!4v1693342015190!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="ubicacion-hanaichi-merida"></iframe>
            <div class="text-center pb-3">
                <h4 class="pt-5">¿Quieres cotizar nuestros servicios? <br>
                    <span class="lead">Nuestro equipo estará encantado de escucharte</span>
                </h4>
                <a href="https://bit.ly/chatconvandu" class="btn btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                <span class="m-auto">Platica con nosotros</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection