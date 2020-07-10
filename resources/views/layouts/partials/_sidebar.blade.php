<ul class="list-group">
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/grid-outline.svg') }}" alt="Chanchitas">
    <a class="sidebar-product__link @if (request()->is('home')) sidebar-product__active @endif" href="{{ route('home') }}">Principal</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/people-outline.svg') }}" alt="Chanchitas">
    <a class="sidebar-product__link @if (request()->is('chanchitas')) sidebar-product__active @endif" href="{{ route('chanchita.index') }}">Mis Chanchitas</a>
  </li>
  <li class="list-group-item">
    <img class="sidebar-product__icon mr-3" src="{{ asset('img/mail-outline.svg') }}" alt="Chanchitas">
    <a class="sidebar-product__link @if (request()->is('invitaciones')) sidebar-product__active @endif"  href="{{ route('invitation.index') }}">Mis Invitaciones</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('category.index') }}">Categorías</a>
  </li>
  <li class="list-group-item">
    <a href="{{ route('product.index') }}">Productos</a>
  </li>
</ul>
