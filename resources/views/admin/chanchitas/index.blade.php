@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="title1">Mis Chanchitas</h3>
      <button class="btn button__base button__pink"><a href="{{ route('chanchita.create') }}">Crear Chanchita</a></button>
    </div>
    

        @foreach ($chanchitas as $chanchita)    
          <div class="card mb-3 shadow-sm card-h">
            <div class="row no-gutters">
              <div class="col-md-4 card-h__img" style="background-image:url('{{ url(Storage::url($chanchita->url_img)) }}')">
                {{-- <img src="..." class="card-img" alt="..."> --}}
                {{-- <img class="card-img" src="" alt="Repostería"> --}}
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  {{-- <span class="badge badge-success card-h__badge mb-2">Celebración</span> --}}
                  <span class="badge badge-primary card-h__badge mb-3">Faltan {{Carbon\Carbon::now()->longAbsoluteDiffForHumans($chanchita->day)}}</span>
                  <h5 class="card-title"><a class="card-h__link" href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5>
                  <p class="card-text">{{$chanchita->description}}</p>
                  <p class="card-text">
                    <small class="text-muted">
                      <img class="sidebar-product__icon" src="{{ asset('img/people-outline.svg') }}" alt="Niños"> 10 participantes
                    </small>
                    {{-- <button class="btn button__base button__blue float-right"><a href="{{ route('chanchita.show', [$chanchita]) }}">Ver</a></button> --}}
                    <button class="btn button__base button__blue float-right"><a href="{{ route('chanchita.show', [$chanchita]) }}">Ver</a></button>
                  </p>
                  {{-- {{$chanchita->day}}
                  {{Carbon\Carbon::now()}} --}}
                  
                </div>
              </div>
            </div>
          </div>
        @endforeach
      
@endsection