@extends('layouts.app-sidebar')

@push('scripts')

@endpush

@section('sidebar')
  @include('layouts.partials._sidebarproduct')
@endsection


@section('content')
    {{-- {{dd($request->is('chanchitas/*'));}} --}}
  
    <div class="d-flex justify-content-between">
      <h3 class="title1">Productos</h3>
      <button class="btn btn-link pb-4"><a href="{{ route('chanchita.show', [$chanchita]) }}"> Regresar</a></button>
    </div>

    <div id="chanchita-product">
      <ChanchitaProduct/>
    </div>
    {{-- @dd(request()) --}}
    {{-- <div class="container"> --}}
      {{-- <div class="row" id="tarjetas">
        
        @foreach ($products as $product)
          <div class="col-10 col-md-6 col-lg-4 mb-4">
            <div class="card product__card shadow">
              <figure class="w-100 product__img-box">
                <img class="w-100" src="{{ url(Storage::url($product->url_img)) }}" alt="">
              </figure>
              <div class="card-body product__body">
                <div class="product__title-box">
                  <h3 class="product__title">{{ $product->name }}</h3>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                  <span class="product__price">S/ {{ number_format((float)$product->price, 2, '.', '') }}</span>

                  @if (in_array($product->id, $selected_ids))
                    
                    <button class="btn btn-outline-info button__base" disabled>&#10003</button>

                  @else 
                    <button 
                      class="btn btn-pink button__base button__pink"
                     
                    >
                        Añadir @{{prueba}}
                    </button>   
                    
                    <h2 v-if="confirma">Verdadero</h2>
                    <button @click="confirma=!confirma">Cambiar</button>
                  @endif
                </div>
              </div>
              
            </div>
          </div>
          
        @endforeach
      </div> --}}

      {{-- </div> --}}

      {{-- MOdal --}}
      
@endsection