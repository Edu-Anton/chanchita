@extends('layouts.app-sidebar')

@section('sidebar')
  <figure class="profile__avatar">
    <img class="w-100" src="{{ url(Storage::url(auth()->user()->avatar)) }}" alt="">
  </figure>
  
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="title1">Mi Perfil</h3>
      <a class="btn btn-link" href="{{ route('home') }}">Regresar</a>
    </div>

    <div class="card">
      <div class="card-body">
        <h5>Datos del usuario</h5>
        <hr>
        <div class="container mb-5">
          <div class="row profile__row">
            <div class="col-3 text-right">
              Nombre:
            </div>
            <div class="col-9 my-2">
              {{$user->name}}
              {{-- <input class="form-control disabled" type="text" value={{$user->name}}> --}}
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right">
              Apellido:
            </div>
            <div class="col-9 my-2">
              {{$user->lastname}}
            </div>
          </div>
          {{-- <button class="btn button__base button__pink mb-5">Editar información</button> --}}
        </div>


        <h5>Información de contacto</h5>
        <hr>
        <div class="container">
          <div class="row profile__row">
            <div class="col-3 text-right my-2">
              Teléfono:
            </div>
            <div class="col-9 my-2">
              {{$user->phone}}
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right my-2">
              Facebook:
            </div>
            <div class="col-9 my-2">
              {{$user->facebook}}
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right my-2">
              Twitter:
            </div>
            <div class="col-9 my-2">
              {{$user->twitter}}
            </div>
          </div>
          <button class="btn button__base button__pink mt-2">
            <a href="{{ route('profile.edit', ['user' => auth()->user()->id]) }}">
              Editar información
            </a>
          </button>
        </div>
      </div>
    </div>
    

        
      
@endsection