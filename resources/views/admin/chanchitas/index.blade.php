@extends('layouts.app-sidebar')

@section('sidebar')
  @include('layouts.partials._sidebar')
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-2">
      <h3 class="title__h1 title--grey">Mis Chanchitas</h3>
      <button class="btn button__base button__pink"><a href="{{ route('chanchita.create') }}">Crear Chanchita</a></button>
    </div>
    
      
        @foreach ($chanchitas as $chanchita)
          <div class="c-hcard__container">
            <div class="row">
              <div class="col-4">
                <div class="card-h__img w-100 h-100" style="background-image:url('{{ url(Storage::url($chanchita->url_img)) }}')"></div>
                {{-- <img class="c-hcard__img" src="{{asset('img/category4.jpg')}}" alt=""> --}}
              </div>
              <div class="col-8">
                <span class="badge badge-primary card-h__badge mb-3">Faltan {{Carbon\Carbon::now()->longAbsoluteDiffForHumans($chanchita->day)}}</span>
                <h5 class="title__h3 title--grey"><a href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5>
                <p class="card-text d-flex justify-content-between">
                  <small class="text-muted">
                    <img class="sidebar-product__icon" src="{{ asset('img/people-outline.svg') }}" alt="Niños"> 10 participantes
                  </small>
                  <small class="text-muted">
                    <img class="sidebar-product__icon" src="{{ asset('img/people-outline.svg') }}" alt="Niños"> 10 participantes
                  </small>
                  <small class="text-muted">
                    <img class="sidebar-product__icon" src="{{ asset('img/people-outline.svg') }}" alt="Niños"> 10 participantes
                  </small>
                  {{-- <button class="btn button__base button__blue float-right"><a href="">Ver</a></button> --}}
                </p>
                <p class="card-text c-hcard__text">{{$chanchita->description}}</p>
              </div>
            </div>
          </div>    

          {{-- <div class="card mb-3 shadow-sm card-h">
            <div class="row no-gutters">
              <div class="col-md-4 card-h__img" style="background-image:url('{{ url(Storage::url($chanchita->url_img)) }}')">
                
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span class="badge badge-primary card-h__badge mb-3">Faltan {{Carbon\Carbon::now()->longAbsoluteDiffForHumans($chanchita->day)}}</span>
                  <h5 class="card-title"><a class="card-h__link" href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5>
                  <p class="card-text">{{$chanchita->description}}</p>
                  <p class="card-text">
                    <small class="text-muted">
                      <img class="sidebar-product__icon" src="{{ asset('img/people-outline.svg') }}" alt="Niños"> 10 participantes
                    </small>
                    <button class="btn button__base button__blue float-right"><a href="{{ route('chanchita.show', [$chanchita]) }}">Ver</a></button>
                  </p>
                </div>
              </div>
            </div>
          </div> --}}
        @endforeach
      
@endsection