@extends('layouts.app')

@section('content')

<h1 class="title1 mb-4">{{$chanchita->name}}</h1>

<div class="card mb-3 shadow-sm card-rounded">
  <div class="row no-gutters">
    <div class="col-md-3">
      {{-- <img src="..." class="card-img" alt="..."> --}}
      <img class="card-img card-rounded" src="{{ url(Storage::url($chanchita->url_img)) }}" alt="Repostería">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        {{-- <h5 class="card-title"><a href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5> --}}
        <p class="card-text">{{$chanchita->description}}</p>
        <div class="d-flex justify-content-between">
          <small class="text-muted">Last updated 3 mins ago</small>
          <small class="text-muted">Código: <b class="ml-3">{{$chanchita->password}}</b></small>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- <div class="chanchita-nav__container">
  <button class="chanchita-nav__button">Presentación</button>
  <button class="chanchita-nav__button">Mi lista</button>
  <button class="chanchita-nav__button">Mis participantes</button>
</div> --}}

<div class="d-flex justify-content-between align-items-center mt-5 mb-3">
  <h3 class="title2 mb-0">Lista</h3>

  @if ($chanchita->user_id === auth()->user()->id)    
    <button class="btn button__base button__pink">
      <a href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>1]) }}">Añadir productos</a>
    </button>
  @endif

</div>
<div class="card shadow-sm card-rounded">
  <div class="card-body">
    <div class="row">
      @if (count($products)!==0)
          @foreach ($products as $product)
            <div class="container mb-4">
              <div class="row">
                <div class="col-2">
                  <figure class="w-100">
                    <img class="w-100" src="{{ url(Storage::url($product->url_img)) }}" alt="">
                  </figure>
                </div>
                <div class="col-6 d-flex align-items-center">
                  <b>{{$product->name}}</b>
                  <form action="{{ route('chanchita.product.list.destroy', ['product_id'=>$product->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="chanchita_id" value={{$chanchita->id}}>
                    <button type="submit" class="btn btn-link">[Eliminar]</button></a>
                  </form>
                  <button class="btn btn-link">[Modificar]</button>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-end">
                  <span>{{$product->pivot->quantity}} unid.</span>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-end">
                  <span>S/ {{$product->price}}</span>
                </div>
              </div>
            </div>
          @endforeach
          <div class="container d-flex justify-content-end">
            <span class="mr-4">Precio Total a dividir:</span>
            <b>S/ {{$precio_total}}</b>
          </div>
      @else
          <div class="card-body">
              @if (auth()->user()->id === $chanchita->user_id)
              Añade productos a tu lista
                  
              @else
              Aún no se han añadido productos
              @endif
          </div>
      @endif
    </div>
  </div>
</div>

  

<div class="d-flex justify-content-between align-items-center mt-5 mb-3">
  <h3 class="title2">Participantes</h3>

  @if ($chanchita->user_id === auth()->user()->id)    
    <button class="btn button__base button__pink">
    <a href="{{ route('chanchita.user.list.index', ['chanchita_id' => $chanchita->id]) }}">Añadir participates</a>
    </button>
  @endif
</div>



  @if ($users->isEmpty())
    <div class="card">
      <div class="card-body">
        <p class="my-4">Aún no hay participantes confirmados.</p>
      </div>
    </div>
  @else    
  <div class="card shadow card-rounded">
    <table class="table table-bordered mb-0">
      <thead>
        <th></th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Estatus</th>
      </thead>
      <tbody>
        @foreach ($users as $user)    
          <tr>
            <td>
              <span class="avatar__box avatar__table">
                <img class="avatar__img" src="{{ asset('img/avatar-nav.png') }}" alt="Avatar">
              </span>
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              @switch($user->pivot->status)
                @case('Confirmado')
                    <span class="badge badge-primary card-h__badge">{{$user->pivot->status}}</span>
                    @break

                @case('Se retiró')
                    <span class="badge badge-warning card-h__badge">{{$user->pivot->status}}</span>
                    @break

                @default
                    Default case...
            @endswitch
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @endif


 @if ($chanchita->user_id !== auth()->user()->id)
 <h3 class="title2 mt-5">Acciones</h3>
  <div class="card card-rounded mt-4">
    <div class="card-body d-flex justify-content-lg-between">
      <button class="btn button__base button__pink">Realizar pago</button>

      <form  class="d-inline" action="{{route('invitation.destroy', $chanchita->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn button__base btn-outline-danger" type="submit">Cancelar participación</button>
      </form>
    </div>
  </div>
 @endif
@endsection