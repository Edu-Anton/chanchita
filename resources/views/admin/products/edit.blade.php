@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <h3 class="title2">Editar Producto</h3>

        <form action="{{route('product.update', [$product])}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Nombre del producto"
              name="name"
              value="{{old('name', $product->name)}}"
            >
          </div>
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Precio del Producto"
              name="price"
              value="{{old('price', $product->price)}}"
            >
          </div>
          <div class="form-group">
            <select 
              name="category_id" 
              class="form-control"
            > 
              @foreach ($categories as $category) 
                @if ($category->id === $product->category_id)
                  <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @endif 
                <option value="{{$category->id}}" >{{$category->name}}</option>
              @endforeach
            {{-- <option selected>--Seleccione una categoría</option> --}}
            </select>
          </div>
          <div class="form-group mt-4">
            <button class="btn btn-info" type="submit">Crear Producto</button>
          </div>
        </form>
      </div>
    </div>
@endsection