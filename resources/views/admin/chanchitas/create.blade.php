@extends('layouts.app-sidebar')

@push('scripts')
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
@endpush

@section('content')
    <h3 class="title1 mb-4">Nueva Chanchita</h3>
    <div class="card">
      <div class="card-body">

        <form action="{{route('chanchita.store')}}" method="POST" enctype="multipart/form-data">
          @csrf

          {{-- <figure class="text-center">
            <div class="col-md-4 card-h__img" style="" id="bg"></div>
            <img class="card-image-form__img" src="" alt="" id="imagen_mostrada">
          </figure>
          <div class="text-center mb-4">
            <input type="file" class="form-control d-none" id="product-file" name="url_img">
            
            <button class="btn button__base btn-outline-info" id="enlazado">
              <img class="sidebar-product__icon mr-3" src="{{ asset('img/camera.svg') }}" alt="Chanchitas">
              Cargar imagen
            </button>
          </div> --}}
          <div class="text-center mb-4">
            <div class="mb-4">
              <img class="card-image-form__img" src="" alt="" id="imagen_mostrada">
              {{-- <img class="img-vacia__icon mr-2" src="{{ asset('img/camera.svg') }}" alt="Juguetes"> --}}
              {{-- Formato de imagen 3:4 --}}
            </div>
            <input type="file" class="form-control @error('url_img') is-invalid @enderror d-none" id="product-file" name="url_img">
            <button class="btn button__base btn-outline-info" id="enlazado">
              <img class="sidebar-product__icon mr-3" src="{{ asset('img/camera.svg') }}" alt="Chanchitas">
              Cargar imagen
            </button>
            @error('url_img')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
          </div>

          <div class="container">
            <div class="row form__group">
              <div class="col-3">
                <label class="col-form-label" for="name">Nombre:</label>
              </div>
              <div class="col-9">
                <input 
                  type="text" 
                  class="form-control @error('name') is-invalid @enderror" 
                  {{-- placeholder="Nombre de la chanchita" --}}
                  name="name"
                  id="name"
                  {{-- required --}}
                  autofocus
                >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
              </div>
            </div>

            <div class="row form__group">
              <div class="col-3">
                <label class="col-form-label" for="name">Descripción:</label>
              </div>
              <div class="col-9">
  <textarea 
    name="description" 
    class="form-control @error('name') is-invalid @enderror" 
    {{-- placeholder="Descripción del evento" --}}
    cols="20" 
    rows="3"
  >
  </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
              </div>
            </div>

            <div class="row form__group">
              <div class="col-3">
                <label class="col-form-label" for="day">Día Límite:</label>
              </div>
              <div class="col-9">
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
            </div>




          </div>




          

          <div class="row mt-4">
            <div class="offset-3 col-9">
              <button class="btn button__base button__pink" type="submit">Crear chanchita</button>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection