@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <h3 class="title2">Nueva Categoría</h3>

        <form action="{{route('category.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Nombre de la categoría"
              name="name"
            >
          </div>
          <div class="form-group mt-4">
            <button class="btn btn-info" type="submit">Crear Categoría</button>
          </div>
        </form>
      </div>
    </div>
@endsection