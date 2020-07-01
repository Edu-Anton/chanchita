@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-5">
          <h3 class="title2">Productos</h3>
          <button class="btn btn-info"><a href="{{ route('product.create') }}">Crear Producto</a></button>
        </div>

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
                    <button class="btn btn-info">
                      <a href="{{ route('product.edit', [$product]) }}"><ion-icon name="body-outline"></ion-icon></a>
                    </button>
                    <form  class="d-inline" action="{{route('product.destroy', $product)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">
                          <i class="far fa-trash-alt mb-n4"></i>
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