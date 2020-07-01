<ul class="list-group sidebar-product__group">
  {{-- <li class="list-group-item sidebar-product__first">
    <a class="sidebar-product__link" href="{{ route('home') }}">Categorías</a>
  </li> --}}
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/tv-outline.svg') }}" alt="Juguetes">
    <a 
        class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/1')) sidebar-product__active @endif" 
        href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>1]) }}"
    >
      Tecnología
    </a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/flask-outline.svg') }}" alt="Niños">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/2')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>2]) }}">
      Perfumes
    </a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/shirt-outline.svg') }}" alt="Niños">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/3')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>3]) }}">Ropa y Accesorios</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/football-outline.svg') }}" alt="Niños">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/4')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>4]) }}">Niños</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/bonfire-outline.svg') }}" alt="Niños">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/5')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>5]) }}">Joyería</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/wine-outline.svg') }}" alt="Licores">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/6')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>6]) }}">Licores</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/rose-outline.svg') }}" alt="Licores">
    <a class="sidebar-product__link @if (request()->is('chanchitas/1/categorias/7')) sidebar-product__active @endif" href="{{ route('chanchita.category.index', ['chanchita'=>$chanchita, 'category_id'=>7]) }}">Flores y Plantas</a>
  </li>
  
</ul>
