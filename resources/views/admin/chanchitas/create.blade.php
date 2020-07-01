@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <h3 class="title2">Nueva Chanchita</h3>

        <form action="{{route('chanchita.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input 
              type="text" 
              class="form-control @error('name') is-invalid @enderror" 
              placeholder="Nombre de la chanchita"
              name="name"
              {{-- required --}}
              autofocus
            >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>

          <div class="form-group">
            <textarea 
              name="description" 
              class="form-control @error('name') is-invalid @enderror" 
              placeholder="Descripción del evento"
              cols="30" 
              rows="3"
            >
            </textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>
          <div class="form-group">
            <input 
              type="date" 
              class="form-control @error('day') is-invalid @enderror" 
              name="day"
            >
            @error('day')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>
          <div class="form-group ">
            <div class="img-vacia__fondo col-6 offset-3">
              <img class="img-vacia__icon mr-2" src="{{ asset('img/camera.svg') }}" alt="Juguetes">
              Formato de imagen 3:4
            </div>
            <input type="file" class="form-control @error('url_img') is-invalid @enderror" name="url_img">
            @error('url_img')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>

          <div class="form-group mt-4">
            <button class="btn btn-info" type="submit">Crear chanchita</button>
          </div>
        </form>
      </div>
    </div>
@endsection