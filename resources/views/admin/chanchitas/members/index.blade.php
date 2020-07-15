@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
  <h1 class="title1">Mis Invitados</h1>
  <a class="btn btn-link" href={{route('chanchita.show', ['chanchita'=>$chanchita_id]) }}>Regresar</a>
</div>

<div id="userlistpage"></div>


@endsection