@extends('layouts.app')



@section('content')

{{-- @dd($edit_user) --}}
<form action="{{ route('profile.update', ['user' => $edit_user]) }}" method="POST" enctype="multipart/form-data">
 @csrf
 @method('PATCH')

<div class="row">
  <div class="col-3">


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



    <figure class="profile__avatar">
      {{-- <img class="w-100" src="{{ url(Storage::url($edit_user->avatar)) }}" alt="" id="imagen_inicial"> --}}
      <img class="w-100" src="{{ url(Storage::url($edit_user->avatar)) }}" alt="" id="imagen_mostrada">
    </figure>
    <input type="file" class="form-control d-none" id="product-file" name="avatar">
    <button class="btn button__base btn-outline-info profile__avatar-btn" id="enlazado">
      <img class="sidebar-product__icon mr-3" src="{{ asset('img/camera.svg') }}" alt="Chanchitas">
      Cargar imagen
    </button>
  </div>
  <div class="col-9">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="title1">Editar Mi Perfil</h3>
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
            <div class="col-9">
              <input 
                  class="form-control disabled" 
                  type="text" 
                  name="name"
                  value="{{$edit_user->name}}">
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right">
              Apellido:
            </div>
            <div class="col-9">
              <input 
                  class="form-control" 
                  type="text" 
                  name="lastname"
                  value={{$edit_user->lastname}}
              >
            </div>
          </div>
          {{-- <button class="btn button__base button__pink mb-5">Editar información</button> --}}
        </div>


        <h5>Información de contacto</h5>
        <hr>
        <div class="container">
          <div class="row profile__row">
            <div class="col-3 text-right">
              Teléfono:
            </div>
            <div class="col-9">
              <input 
                  class="form-control disabled" 
                  type="text"
                  name="phone"
                  placeholder="999-999-999" 
                  value={{$edit_user->phone}}>
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right">
              Facebook:
            </div>
            <div class="col-9">
              <input class="form-control" type="text" value={{$edit_user->facebook}}>
            </div>
          </div>
          <div class="row profile__row">
            <div class="col-3 text-right">
              Twitter:
            </div>
            <div class="col-9">
              <input class="form-control" type="text" value={{$edit_user->twitter}}>
            </div>
          </div>
          <button class="btn button__base button__pink" type="submit">Guardar cambios</button>
        </div>
      </div>
    </div>
  </div>
</div>



</form>
    
<script>
  const enlazado = document.getElementById('enlazado');
  const file_input = document.getElementById('product-file')
  const imagen_mostrada = document.getElementById('imagen_mostrada');
  const imagen_inicial = document.getElementById('imagen_inicial');
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
      // imagen_inicial.style.display = 'none';
    }
  })
  
</script>

        
      
@endsection