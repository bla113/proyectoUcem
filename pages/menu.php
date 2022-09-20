<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
  <div class="container-fluid">

    <img src="img/logoUcem.png" alt="LogoUcem" width="120">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-4 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="oferta-academica">Oferta Académica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="eventos">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="biblioteca">Biblioteca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="recursos">Recursos Académicos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="convalidaciones">Convalidaciones</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="frmCrearCuenta">Crear Cuenta</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active " aria-current="page">
            <?php
            
            if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
              echo $_SESSION['login'];
            } else {
              echo '<li class="nav-item"> <a class="nav-link active " aria-current="page" href="login">Ingreso al Sistema</a></li>';
            }
            ?>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="salir">Cerrar</a>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>

    </div>

  </div>

</nav>