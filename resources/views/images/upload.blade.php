@extends('layouts.app')

@section('content')
<form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <input class="form-control" type="file" name="url_img">
    </div>
    <div class="form-group">
      <button class="btn btn-success" type="submit">subir imagen</button>
    </div>
</form>
@endsection
