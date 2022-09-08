@extends('layouts.terrenos')
@section('subtitle', 'Ciudad Central Mérida')
@section('content')
    <header class="inicio-2">
        <div class="container">
            <div class="inicio__titular text-center text-black">
                <h1>ciudad central mérida</h1>
                <!--  <p>
                  Terrenos residenciales con el respaldo de años y años de
                  experiencia.
                </p> -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-success my-2 my-sm-0" style="text-transform: uppercase">
                    <span class="pl-2 m-auto">Hablar con un asesor</span>
                </button>
            </div>
        </div>
    </header>
    <section class="desarrollos">
        <div class="container desarrollos__merida">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 desarrollos__descripcion">
                    <h6>Ciudad Central Mérida</h6>
                    <h4 style="font-weight: 700;">Una nueva ciudad para vivir en Yucatán</h4>
                    <p>
                        Ciudad Central es un innovador proyecto residencial al noreste de Mérida, la zona más privilegiada
                        para invertir o comenzar un patrimonio con las mejores comodidades.
                        <br /><br />
                        Esta comunidad planeada ofrece terrenos residenciales desde 133 m2, instalaciones subterráneas y
                        amenidades exclusivas para que construyas tu casa estilo TownHouse en un mediano plazo y disfrutes
                        de la privacidad y seguridad que siempre has soñado en la ciudad más segura de México.
                    </p>
                    <a href="" class="btn btn-success" type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#exampleModal">CONTACTAR A UN ASESOR</a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/QHSyfDcYXVk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="amenidades">
        <div class="container">
            <div class="certeza__titular text-center pb-4">
                <h5>INVERTIR EN YUCATÁN ES ADELANTARSE AL FUTURO</h5>
                <h3>Un desarrollo con multiples amenidades</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                    <figure>
                        <img src="/img/Render1.jpeg" class="img-fluid" alt="Logo Ciudad Central Mérida" />
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <div class="row">
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-agua-potable-1.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Agua Potable</h5>
                            <p>
                                Servicio de agua a pie de tu lote.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-aguas-residuales.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Aguas Residuales</h5>
                            <p>
                                Tratamiendo individual de aguas residuales.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/icon-energia-electrica-1.png') }}" width="50"
                                    height="50" alt="" />
                            </figure>
                            <h5>Energia Eléctrica</h5>
                            <p>
                                Servicio de electricidad a pie de tu lote.
                            </p>
                        </div>
                        <div class="col-6 amenidades__opciones">
                            <figure>
                                <img src="{{ asset('img/domen/delimitacion-fisica.png') }}" width="50" height="50"
                                    alt="" />
                            </figure>
                            <h5>Mojoneras</h5>
                            <p>
                                Delimitacion fisica con mojoneras frontales.
                            </p>
                        </div>
                        <div class="col-12 amenidades__opciones">
                            <a href="" class="btn btn-success btn-block" type="button" data-toggle="modal"
                            data-target="#exampleModal">DESCARGAR BROCHURE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mapa-desarrollo mt-5">
        <div class="bg-cc_master">
            <div class="container mapa-desarrollo__master">
                <h3 class="text-center pb-4" style="font-weight: 700;">
                    UN DESARROLLO TOTALMENTE PLANEADO
                </h3>
                <figure class="master text-center">
                    <img src="/img/masterplan1.jpeg" alt="" class="img-fluid">
                </figure>
            </div>
        </div>
    </section>
    <section class="recorrido">
        <iframe src="https://eva3d.com/realidad-virtual/recorridos-virtuales/ciudad-central/index.htm" width="100%"
            height="100%"></iframe>
    </section>
    </main>
@endsection
