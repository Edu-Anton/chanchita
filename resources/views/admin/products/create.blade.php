@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="title1">Nuevo Producto</h3>
    <button class="btn btn-link"><a href="{{ route('product.index') }}">Regresar</a></button>
  </div>
    <div class="card">
      <div class="card-body">

        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <figure class="text-center">
            <div class="col-md-4 card-h__img" style="" id="bg"></div>
            <img class="card-image-form__img" src="" alt="" id="imagen_mostrada">
          </figure>
          <div class="text-center mb-4">
            <input type="file" class="form-control d-none" id="product-file" name="url_img">
            
            <button class="btn button__base btn-outline-info" id="enlazado">
              <img class="sidebar-product__icon mr-3" src="{{ asset('img/camera.svg') }}" alt="Chanchitas">
              Cargar imagen
            </button>
          </div>
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
            <button class="btn button__base button__blue" type="submit">Crear Producto</button>
          </div>
        </form>

        <script>
          const enlazado = document.getElementById('enlazado');
          const file_input = document.getElementById('product-file')
          const imagen_mostrada = document.getElementById('imagen_mostrada');
          // const bg = document.getElementById('bg');
          enlazado.addEventListener('click', (e) => {
            e.preventDefault();
            console.log('enlazado!!');
            file_input.click();
          });

          file_input.addEventListener('change', (e)=> {
            e.preventDefault();
            console.log(e.target.files[0]);
            const file = e.target.files[0];

            console.log('const file', file.name);

            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = (event) => {
              // console.log('la plata', event.target.result);
              imagen_mostrada.setAttribute('src', event.target.result);
              // bg.setAttribute('style', `background-image:url(${event.target.result})`);
              // bg.style.backgroundImage = 'url(' + e.target.result + ')';
            }
          })
          
        </script>

      </div>
    </div>
@endsection