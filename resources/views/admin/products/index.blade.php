@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="title1">Productos</h3>
    <button class="btn button__base button__pink"><a href="{{ route('product.create') }}">Crear Producto</a></button>
  </div>
  <div class="card mb-4">
    <div class="card-body py-3">
          <form action="{{route('product.search')}}" method="GET" class="d-flex justify-content-between align-items-center">
            @csrf
              <select 
                  name="query" 
                  class="form-control flex-grow-1"
                > 
                  <option>--Seleccione una categoría</option>
                  <option value="0" >Todas las categorías</option>
                  @foreach ($categories as $category)  
                    <option value="{{$category->id}}" >{{$category->name}}</option>
                  @endforeach
                </select>
            <button class="btn button__base button__blue ml-3" type="submit">buscar</button>
          </form>
    </div>
  </div>
    <div class="card">
      <div class="card-body">


        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Actions</th>
          </thead>
          <tbody>
            @foreach ($products as $product)
                <tr>
                  <td>{{$product->name}}</td>
                  <td>{{$product->category->name}}</td>
                  <td>
                    <button class="btn button__base btn-outline-info">
                      <a href="{{ route('product.edit', [$product]) }}">
                        <img class="sidebar-product__icon" src="{{ asset('img/pencil-outline.svg') }}" alt="Chanchitas">
                      </a>
                    </button>
                    <form  class="d-inline" action="{{route('product.destroy', $product)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn button__base btn-outline-danger" type="submit">
                          <img class="sidebar-product__icon" src="{{ asset('img/trash-outline.svg') }}" alt="Chanchitas">
                        </button>
                    </form>

                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection