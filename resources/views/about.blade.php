@extends('layouts.web')

@section('content')

    <div class="inner-banner__wrapper mb-5">
        <figure>
            {{-- <img src={innerBanner}  class="w-100" alt=""/> --}}
            <img class="w-100" src="{{ asset('img/inner-banner.jpg') }}" alt="Banner Interno">
        </figure>
        <div class="container inner-banner__text-wrapper">
            <h1 class="inner-banner__title">Quienes somos</h1>
        </div>
    </div>

    {{-- <InnerBanner innerBannerTitle="Quiénes somos"/> --}}
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8">
                <Title2 title="Misión"/>
                <p class="mb-5">Somos una plataforma digital orientada a facilitar la organización de las populares "chanchitas" de forma rápida, simple y segura. Ayudamos al organizador a tener un mejor control de la recolecciòn del dinero e incluso facilitar la compra. Al mismo tiempo, facilitamos la interacción de los participantes en la organización de la "chanchita" ofreciéndoles flexibilidad de pago.</p>
                
                <Title2 title="Visión"/>
                <p class="mb-5">Ser la startup de organización de eventos sociales líder en Perú y Lationomerica.</p>

                <Title2 title="Valores"/>
                <p>Somos una startup ADAPTABLE A LAS NECESIDADES DEL USUARIO, ENFOCADA AL CLIENTE Y APASIONADA </p>
                <p><IconPlus/>ADAPTABLE= Buscamos adaptarnos a las distintas necesidades del cliente.</p>
                <p><IconPlus/>ENFOCADA AL CLIENTE= Inspirado y diseñado en función a las necesidades cambiantes de nuestros usuarios.</p>
                <p><IconPlus/>PASION = Enfocados en ofrecer soluciones ágiles para hacer la vida de nuestros usuarios más fácil.</p>
            </div>
            <div class="col-md-4">             
                <div class="motto__text-box">
                " Somos una startup adaptable a las necesidades del usuario, enfocada al cliente y apasianada. "
                </div>
            </div>
        </div>
    </div>

@endsection