<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8258FA;">
  <a class="navbar-brand" href="#">Recursos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Tutoriales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Libros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Enlaces</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mantenimientos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('idiomas.index') }}">Idiomas</a>
          <a class="dropdown-item" href="{{ route('temas.index') }}">Temas</a>
          <a class="dropdown-item" href="{{ route('idiomas.index') }}">Editoriales</a>
          <a class="dropdown-item" href="{{ route('idiomas.index') }}">Fabricantes</a>          
        </div>
      </li>
    </ul>
  </div>
</nav>