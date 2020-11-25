<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="{{ url('/')}}">TIENDA DE MASCOTAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACERCA DE...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('/historia/tienda')}}">HISTORIA</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('/productos/perros')}}">PERROS</a>
          <a class="dropdown-item" href="{{ url('/servicios/eventos/{$id}')}}">GATOS</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/historia/contacto')}}">CONTACTOS</a>
      </li>
    </ul>
  </div>
</nav>