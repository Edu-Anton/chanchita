@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <h3 class="title2">Nuevo Producto</h3>

      {{-- <div style="with:100px;height:200px;overflow:hidden;background-image:url({{url('/img/category1.jpg')}}); "></div> --}}

        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <figure class="text-center">
                  <img style="width: 300px; height:300px" src="{{ asset('img/category1.jpg') }}" alt="">
                </figure>
              </div>
              <div class="col-6">
                <form action="" enctype="multipart/form-data">
                  <div class="form-group">
                    {{-- <label for="product-file">Example file input</label> --}}
                    <input type="file" class="form-control" id="product-file">
                  </div>
    
                  <button class="btn btn-info" type="submit">Subir Imagen</button>
                </form>
              </div>
            </div>
    
          </div>
        </div>

        <form action="{{route('product.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Nombre del producto"
              name="name"
            >
          </div>
          <div class="form-group">
            <input 
              type="text" 
              class="form-control" 
              placeholder="Precio del Producto"
              name="price"
            >
          </div>
          <div class="form-group">
            <select 
              name="category_id" 
              class="form-control"
            > 
              <option>--Seleccione una categoría</option>
              @foreach ($categories as $category)  
                <option value="{{$category->id}}" >{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group mt-4">
            <button class="btn btn-info" type="submit">Crear Producto</button>
          </div>
        </form>
      </div>
    </div>
@endsection