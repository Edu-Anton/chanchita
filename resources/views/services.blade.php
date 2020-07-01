@extends('layouts.web')

@section('content')

    <div class="inner-banner__wrapper mb-5">
        <figure>
            {{-- <img src={innerBanner}  class="w-100" alt=""/> --}}
            <img class="w-100" src="{{ asset('img/inner-banner.jpg') }}" alt="Banner Interno">
        </figure>
        <div class="container inner-banner__text-wrapper">
            <h1 class="inner-banner__title">Servicios</h1>
        </div>
    </div>

    {{-- <InnerBanner innerBannerTitle="Quiénes somos"/> --}}
    <div class="container my-4">
      <div class="row">
        <div class="col-12 col-lg-8">
          {{-- <Title2 title="Conjunta busca"/> --}}
          <h3 class="title2">Conjunta busca</h3>
          <p class="mb-5">Librarte del estrés y tiempo extra dedicado a la organización y/o participación de tu chancha y disfrutar más de lo que realmente te gusta compartir con la gente que quieres.</p>
          {{-- <Title2 title="Cómo funciona"/> --}}
          <h3 class="title2">¿Cómo funciona?</h3>
          <p>Si eres organizador:</p>
          <ol>
            <li>Crea una evento para el cual necesites una chanchita.</li>
            <li>Selecciona todos los artículos que necesitas para tu evento.</li>
            <li>Cotiza todos los artículos de tu lista y coloca los precios.</li>
            <li>Invita a los participantes de la chanchita.</li>
            <li>Has seguimiento de los depósitos en forma inmediata y virtual.</li>
          </ol>
          <p class="mt-5">Si eres participante:</p>
          <ol>
            <li>Entra a  la chanchita a la que fuiste invitado.</li>
            <li>Confirma tu participaciòn y revisa todos los artículos que el organizador incluyó.</li>
            <li>Contribuye a la "chanchita" a través de nuestra plataforma de pago digital  (acepta todas las tarjetas crédito y débito).</li>
          </ol>
        </div>
        <div class="col-12 col-lg-3 offset-lg-1 mt-5 mt-lg-0">
          
          
          {{-- <Title2 title="Testimonios"/> --}}
          <h3 class="title2">Testimonios</h3>
          <div class="row">
            <div class="col-12 mb-4">
              <p>" Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget</p>
              <span class="avatar__box">
                <img class="avatar__img" src="{{ asset('img/avatar1.jpg') }}" alt="Avatar">
              </span>
              <span>EMMA S.</span>
            </div>
            <div class="col-12 mb-4">
              <p>" Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget</p>
              <div class="position-relative">
                <span class="avatar__box">
                  <img class="avatar__img" src="{{ asset('img/avatar2.jpg') }}" alt="Avatar">
                </span>
                <span>EMMA S.</span>
              </div>
            </div>
            <div class="col-12 mb-4">
              <p>" Quisque varius, nibh ac feugiat interdum, libero massa laoreet tellus, nec congue lorem arcu a nunc. Praesent quis felis eget</p>
              <div class="position-relative">
                <span class="avatar__box">
                  <img class="avatar__img" src="{{ asset('img/avatar1.jpg') }}" alt="Avatar">
                </span>
                <span>EMMA S.</span>
              </div>
            </div>
          </div>
          
         
        </div>
      </div>
    </div>

@endsection