@extends('layouts.app-sidebar')

@section('sidebar')
  @include('layouts.partials._sidebar')
@endsection

@section('content')

    <div class="container">
      <h2 class="title1">Mis Invitaciones</h2>
    </div>
    {{-- <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
        </div> --}}

        

        {{-- @foreach ($chanchitas as $chanchita)    
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img class="card-img" src="{{ url(Storage::url($chanchita->url_img)) }}" alt="Repostería">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        @endforeach --}}
      {{-- </div>
    </div> --}}

    <div class="card mt-4 mb-4">
      <div class="card-body">
        <h5>Unirme a una chanchita</h5>
        <p>Ingresar enlace</p>
        <form action="{{route('invitation.search')}}" method="POST">
          @csrf
          <div class="form-group">
            <input 
              class="form-control @error('password') is-invalid @enderror" 
              type="text"
              name="password"
            >
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn button__base button__pink" type="submit">Buscar</button>
          </div>
        </form>
      </div>
    </div>

    

    @if ($invitations->isNotEmpty())
    @foreach ($invitations as $chanchita)    
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
    @else
    <div class="card mt-4">
      <div class="card-body">
        Aún no tienes chanchitas registradas


        

      </div>
    </div>
    @endif


    
@endsection