@extends('layouts.web')

@section('content')

    <div class="banner__wrapper">
        <figure>
        {{-- <img src={bannerImg} class="w-100" alt=""/> --}}
        <img class="w-100" src="{{ asset('img/banner.jpg') }}" alt="Banner">
        </figure>
        <div class="container banner__zindex-box">
        <div class="banner__text-box">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga beatae  
            <button class="banner__callto">Crear mi chanchita</button>
        </div>
        
        </div>
    </div>

    {{-- About Section --}}
    <div class="container pb-5 about__section">
    {{-- <Title1 class="text-center" title="Características"/> --}}
    <h2 class="text-center title1">Características</h2>
    <div class="row mt-5">
        <div class="col-12 col-lg-6 d-flex mb-4">
        <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quidem sunt illo cum maiores cumque, sed voluptas molestias? Quas, vitae.</p> 
        <div class="icon-box ml-4">
            <i class="fas fa-users icon"></i>
        </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-row-reverse mb-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt architecto veritatis eos voluptatibus explicabo cum vel lit ad nulla quam!</p> 
        <div class="icon-box mr-4">
            <i class="fas fa-user icon"></i>
        </div>
        </div>
        <div class="col-12 col-lg-6 d-flex mb-4">
        <p class="text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eligendi ea quo obcaecati recusandae, expedita quia sunt, placeat nostrum!</p> 
        <div class="icon-box ml-4">
            <i class="fas fa-user icon"></i>
        </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-row-reverse mb-4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi natus distinctio ab reiciendis quibusdam quam asperiores debitis mollitia obcaecati ipsum.</p> 
        <div class="icon-box mr-4">
            <i class="fas fa-user icon"></i>
        </div>
        </div>
    </div>
    </div>

    {{-- Categories Section --}}
    <div class="container my-5 text-center">
        <h2 class="text-center title1">Categorías</h2>
        
        <div class="row mt-5">
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  class="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category1.jpg') }}" alt="Repostería">
                        <div class="category-card__text-box">
                            Repostería
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category2.jpg') }}" alt="Juguetes">
                        <div class="category-card__text-box">
                            Juguetes
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category3.jpg') }}" alt="Tecnología">
                        <div class="category-card__text-box">
                            Tecnología
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category4.jpg') }}" alt="Eventos y Fiestas">
                        <div class="category-card__text-box">
                            Eventos y Fiestas
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category5.jpg') }}" alt="Dormitorio">
                        <div class="category-card__text-box">
                            Dormitorio
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category6.jpg') }}" alt="Belleza">
                        <div class="category-card__text-box">
                            Belleza
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category7.jpg') }}" alt="Restaurantes">
                        <div class="category-card__text-box">
                            Restaurantes
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div>
                    <div class="category-card__wrapper">
                        {{-- <img src=  className="w-100" alt=""/> --}}
                        <img class="w-100" src="{{ asset('img/category8.jpg') }}" alt="Experiencias">
                        <div class="category-card__text-box">
                            Experiencias
                        </div>
                    </div>
                </div>
            </div>
        
        
        
        
    </div>       
    
    <a class="d-inline-block mt-5" href="/">Ver todas las categorías de productos</a>
    
    </div>
    
@endsection