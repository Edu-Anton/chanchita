@extends('layouts.app-sidebar')

@section('sidebar')
  @include('layouts.partials._sidebar')
@endsection

@section('content')
{{-- <h3 class="title2">Mis Invitaciones</h3> --}}

<div class="card home-bg mb-n1">
  {{-- <img class="w-100 h-100 home-bg__img" src="{{ asset('img/home-bg2.jpg') }}" alt="Banner Interno"> --}}
  <img class="home-bg__img" src="{{ asset('img/banner.jpg') }}" alt="Banner Interno">
  <div class="home-bg__text-box">
    
    <span class="home-bg__text">¡Comienza una chanchita!</span>
  </div>
</div>

<div class="card">
  <div class="card-body">
    {{-- <h5>Unirme a una chanchita</h5> --}}
    <p>Unirme con un enlace:</p>
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

@endsection