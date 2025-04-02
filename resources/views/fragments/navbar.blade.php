<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-gem fa-lg" style="color: #c17710;"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-store fa-bounce"></i> Dulces
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('products.create')}}"><i class="fa-solid fa-plus"></i> Registrar</a></li>
              <li><a class="dropdown-item" href="{{route('products.index')}}">Inventario</a></li>
              <li><a class="dropdown-item" href="#">Marcas</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-users"></i> Clientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-plus"></i> Nuevo</a></li>
              <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-address-book"></i> Agenda</a></li>
              <li><a class="dropdown-item" href="#">Direcciones</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ventas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-plus"></i> Registrar</a></li>
              <li><a class="dropdown-item" href="#">Salidas</a></li>
            </ul>
          </li>
        </ul>
        {{-- Configuración de Inicio de Sesión --}}
        @if(auth()->user() != null)
        {{-- When Login --}}
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li>
                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                      Logout
                    </a>
                  </form>
              </li>
            </ul>
          </li>
        </ul>
        @else
        {{-- When Logout --}}
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
          </li>
        </ul>
        @endif
        {{-- Termina Inicio de Sesión --}}

      </div>
    </div>
  </nav>