@extends('layouts.app')

@section('content')
{{-- <h3 class="title2">Mis Invitaciones</h3> --}}

{{-- @dd($chanchita); --}}
<div class="card mb-3 shadow-sm card-rounded">
  <div class="row no-gutters">
    <div class="col-md-3">
      {{-- <img src="..." class="card-img" alt="..."> --}}
      <img class="card-img" src="{{ url(Storage::url($chanchita->url_img)) }}" alt="Repostería">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('chanchita.show', [$chanchita]) }}">{{$chanchita->name}}</a></h5>
        <p class="card-text">{{$chanchita->description}}</p>
        <div class="d-flex justify-content-between">
          <small class="text-muted">
            <img class="sidebar-product__icon mr-2" src="{{ asset('img/calendar-outline.svg') }}" alt="Niños">
            Programado para : {{Carbon\Carbon::now()->longAbsoluteDiffForHumans($chanchita->day)}}</small>
          {{-- <small class="text-muted">Código: <b class="ml-3">{{$chanchita->password}}</b></small> --}}
        </div>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-body">
    <p>Hola te invitamos a nuestra chanchita.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptas quidem temporibus iusto totam laboriosam esse enim molestiae deserunt? Laboriosam maxime unde accusamus facilis exercitationem, quae consequuntur aperiam necessitatibus magnam!</p> 
    <button class="btn button__base btn-block  button__pink my-5">
      <a href="{{route('invitation.accept', ['chanchita_id'=>$chanchita->id])}}"
      >
        Quiero participar de la chanchita
      </a>
    </button>
  </div>
</div>

@endsection