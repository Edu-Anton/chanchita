<ul class="list-group">
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/bookmark-outline.svg') }}" alt="Chanchitas">
    <a class="sidebar-product__link @if (request()->is('categorias')) sidebar-product__active @endif" href="{{ route('category.index') }}">Categorías</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/pricetag-outline.svg') }}" alt="Chanchitas">
    <a class="sidebar-product__link @if (request()->is('productos')) sidebar-product__active @endif" href="{{ route('product.index') }}">Productos</a>
  </li>
</ul>