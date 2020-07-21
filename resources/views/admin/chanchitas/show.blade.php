@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-5">
  <h1 class="title__h1 title--grey">{{$chanchita->name}}</h1>
  <a href="{{ route('chanchita.edit', [$chanchita]) }}" class="btn button__base button__pink">Editar información</a>
</div>

<div class="row mb-5">
  <div class="col-6 col-lg-3 mb-4">
    {{-- <img class="card-img" src="{{ url(Storage::url($chanchita->url_img)) }}" alt="Repostería"> --}}
    <div class="card-h__img w-100 h-100 shadow" style="background-image:url('{{ url(Storage::url($chanchita->url_img)) }}')"></div>
  </div>
  <div class="col-6 col-lg-3 mb-4">
    <div class="indicator__box">
      <img class="indicator__bg-icon" src="{{ asset('img/podium-bg-outline.svg') }}" alt="Niños">
      <div class="indicator__icon-box mt-2">
        <img class="indicator__icon" src="{{ asset('img/people-white-outline.svg') }}" alt="Niños">
      </div>
      <h3 class="indicator__title">Partipantes</h3>
      <p class="indicator__data">6</p>
    </div>
  </div>
  <div class="col-6 col-lg-3 mb-4">
    <div class="indicator__box">
      <img class="indicator__bg-icon" src="{{ asset('img/podium-bg-outline.svg') }}" alt="Niños">
      <img class="indicator__icon-chanchita mt-2" src="{{ asset('img/icono.png') }}" alt="Niños">
      <h3 class="indicator__title">Monto por persona</h3>
      <p class="indicator__data">S/ 70</p>
    </div>
  </div>
  <div class="col-6 col-lg-3 mb-4">
    <div class="indicator__box">
      <img class="indicator__bg-icon" src="{{ asset('img/podium-bg-outline.svg') }}" alt="Niños">
      <div class="indicator__icon-box mt-2">
        <img class="indicator__icon" src="{{ asset('img/calendar-white-outline.svg') }}" alt="Niños">
      </div>
      <h3 class="indicator__title">Último día de pago</h3>
      <p class="indicator__data">25 de Julio</p>
    </div>
  </div>
 
</div>

{{-- <div class="card mb-3 shadow-sm card-rounded">
  <div class="row no-gutters">
    <div class="col-md-3">
      
      <img class="card-img card-rounded" src="{{ url(Storage::url($chanchita->url_img)) }}" alt="Repostería">
    </div>
    <div class="col-md-9">
      <div class="card-body">
       
        <p class="card-text">{{$chanchita->description}}</p>
        <div class="d-flex justify-content-between">
          <small class="text-muted">Last updated 3 mins ago</small>
          <small class="text-muted">Código: <b class="ml-3">{{$chanchita->password}}</b></small>
        </div>
      </div>
    </div>
  </div>
</div> --}}

{{-- <div class="chanchita-nav__container">
  <button class="chanchita-nav__button">Presentación</button>
  <button class="chanchita-nav__button">Mi lista</button>
  <button class="chanchita-nav__button">Mis participantes</button>
</div> --}}

<nav>
  <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
    <a class="tab__item  active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chanchita</a>
    {{-- <a class="tab__item" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lista</a> --}}
    <a class="tab__item" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Participantes</a>
  </div>
</nav>


<div class="tab-content" id="nav-tabContent">
  {{-- Inicio Información de Chanchita --}}
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <div class="card my-5">
      <div class="card-body">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, eius? Quaerat, quisquam aspernatur dicta dolores officiis deleniti id fuga distinctio maiores laboriosam architecto, provident, expedita dolorem labore repellat quis. Dolor?
      </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="title2 mb-0">Lista</h3>
    
      @if ($chanchita->user_id === auth()->user()->id)    
        <button class="btn button__base button__pink">
          <a href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>1]) }}">Añadir productos</a>
        </button>
      @endif
    
    </div>


    <div class="row">
      <div class="col-12 col-md-8 mb-4">
        {{-- Inicio de la sección de productos --}}
        
        @if (count($products)!==0)
        @foreach ($products as $product)
            <div class="card shadow-sm card-rounded mb-4">
              <div class="card-body">
              {{-- <div class="container"> --}}
                <div class="row">
                  <div class="col-2">
                    <figure class="w-100 mb-0">
                      <img class="w-100" src="{{ url(Storage::url($product->url_img)) }}" alt="">
                    </figure>
                  </div>
                  <div class="col-6 d-flex align-items-center">
                    <b>{{$product->name}}</b>
                    <form action="{{ route('chanchita.product.list.destroy', ['product_id'=>$product->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-link">[Eliminar]</button></a>
                    </form>
                    <button class="btn btn-link">[Modificar]</button>
                  </div>
                  <div class="col-2 d-flex align-items-center justify-content-end">
                    <span>{{$product->quantity}} unid.</span>
                  </div>
                  <div class="col-2 d-flex align-items-center justify-content-end">
                    <span>S/ {{$product->price}}</span>
                  </div>
                </div>
              {{-- </div> --}}
            </div>
          </div>
          
            @endforeach
            {{-- <div class="container d-flex justify-content-end">
              <span class="mr-4">Precio Total a dividir:</span>
              <b>S/ {{$precio_total}}</b>
            </div> --}}
        @else
            <div class="card-body">
                @if (auth()->user()->id === $chanchita->user_id)
                Añade productos a tu lista
                    
                @else
                Aún no se han añadido productos
                @endif
            </div>
        @endif
            
        {{-- Fin de la sección de productos --}}
      </div>
      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <h4 class="title__h3 title--dark">Detalle del Monto</h4>
            <hr>
            <div class="d-flex justify-content-between mb-3">
              <span class="title__h4 title--grey">Monto Total:</span>
              <span class="title__h4 title--dark">S/ {{$precio_total}}</span>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <span class="title__h4 title--grey">Cargo:</span>
              <span class="title__h4 title--dark">S/ 20</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="title__h4 title--grey">Delivery:</span>
              <span class="title__h4 title--dark">S/ 10</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <span class="title__h4 title--blue">Monto por persona:</span>
              <span class="title__h4 title--dark">S/ 20</span>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Fin Información de Chanchita --}}

  {{-- Lista de elementos --}}
  {{-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

    ....

   



  </div> --}}
  {{-- Fin Lista de elementos --}}

  {{-- Inicio Lista de Partipantes --}}
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
      {{-- <h3 class="title2">Participantes</h3> --}}
    
      @if ($chanchita->user_id === auth()->user()->id)    
        <button class="btn button__base button__pink">
        <a href="{{ route('chanchita.user.list.index', ['chanchita_id' => $chanchita->id]) }}">Añadir participates</a>
        </button>
      @endif
    </div>
    
    @if ($users->isEmpty())
      <div class="card">
        <div class="card-body">
          <p class="my-4">Aún no hay participantes confirmados.</p>
        </div>
      </div>
    @else    
    <div class="card shadow card-rounded">
      <h3 class="title__h3 pl-3 pb-3 pt-4">Participantes</h3>
      <table class="table mb-3">
        <thead>
          <tr>
            <th class="table__th title__h4 table__th-avatar"></th>
            <th class="table__th title__h4">Nombre</th>
            <th class="table__th title__h4">Email</th>
            <th class="table__th title__h4 table__status">Estatus</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)    
            <tr>
              <td>
                <span class="avatar__box avatar__table">
                  <img class="avatar__img" src="{{ url(Storage::url(auth()->user()->avatar)) }}" alt="Avatar">
                </span>
              </td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                @switch($user->pivot->status)
                  @case('Confirmado')
                      <span class="badge badge-primary card-h__badge">{{$user->pivot->status}}</span>
                      @break
  
                  @case('Se retiró')
                      <span class="badge badge-warning card-h__badge">{{$user->pivot->status}}</span>
                      @break
  
                  @default
                      Default case...
              @endswitch
              </td>
              
             
            </tr>
          @endforeach
          <tr>
            <td>
              <span class="avatar__box avatar__table">
                <img class="avatar__img" src="{{ url(Storage::url(auth()->user()->avatar)) }}" alt="Avatar">
              </span>
            </td>
            <td>Alonso Calderón</td>
            <td>alonso@mail.com</td>
            <td>
              <span class="badge badge-success card-h__badge">Pagó</span>

            </td>
            
           
          </tr>
        </tbody>
      </table>
    </div>
    @endif


  </div>
  {{-- Fin lista de participantes --}}
</div>













 @if ($chanchita->user_id !== auth()->user()->id)
 <h3 class="title2 mt-5">Acciones</h3>
  <div class="card card-rounded mt-4">
    <div class="card-body d-flex justify-content-lg-between">
      <button class="btn button__base button__pink">Realizar pago</button>

      <form  class="d-inline" action="{{route('invitation.destroy', $chanchita->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn button__base btn-outline-danger" type="submit">Cancelar participación</button>
      </form>
    </div>
  </div>
 @endif
@endsection