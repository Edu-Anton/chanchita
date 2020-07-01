@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <h3 class="title2">Editar Categoría</h3>

        <form action="{{route('category.update', [$category])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Nombre de la categoría"
              name="name"
              value="{{old('name', $category->name)}}"
            >
          </div>
          <div class="form-group mt-4">
            <button class="btn btn-info" type="submit">Editar Categoría</button>
          </div>
        </form>
      </div>
    </div>
@endsection