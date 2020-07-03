<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> --}}

<!-- Modal -->
<div class="modal fade card-rounded" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('add.cart') }}" method="POST">
        @csrf
        <input 
          type="hidden" 
          id="myInput"
          name="product_id"
          value="{{$product->id}}"
        >
        <input 
          type="hidden" 
          name="chanchita_id"
          value="{{$chanchita}}"
        >
      {{-- <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$product->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      <img class="w-100" src="{{ url(Storage::url($product->url_img)) }}" alt="">
      <div class="modal-body">
        {{-- <div class="product__title-box">
          <h3 class="product__title">{{ $product->name }}</h3>
        </div> --}}

        <div>
          <div class="form-group">
            <input 
              type="text" 
              name="quantity" 
              class="form-control"
              placeholder="cantidad del producto"
            >
          </div>
          {{-- <div class="form-group">
            <h3 class="product__title">Precio referencial {{ $product->price }}</h3>
            <input 
              type="text" 
              name="price" 
              class="form-control"
              id="price"
              placeholder="cantidad del producto"
            >
          </div> --}}
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-between">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Agregar</button> --}}
        <button 
          type="button" 
          class="btn button__base btn-outline-primary" data-dismiss="modal"
        >
          Cancelar
        </button>
        <button type="submit" class="btn btn-pink button__base button__pink" >Añadir</button  
        >
        {{-- data-dismiss="modal" --}}
      </div>
    </form>
    {{$product->name}}{{$product->id}}
    
    </div>
  </div>
</div>