@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-5">
          <h3 class="title2">Categorías</h3>
          <button class="btn btn-info"><a href="{{ route('category.create') }}">Crear Categoría</a></button>
        </div>

        <table class="table">
          <thead>
            <th>Name</th>
            <th>Actions</th>
          </thead>
          <tbody>
            @foreach ($categories as $category)
                <tr>
                  <td>{{$category->name}}</td>
                  <td>
                    <button class="btn btn-outline-info">
                      <a href="{{ route('category.edit', [$category]) }}"><ion-icon name="pencil-outline"></ion-icon></a>
                    </button>
                    <button class="btn btn-outline-danger"><ion-icon name="trash-bin-outline"></ion-icon></button>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
@endsection