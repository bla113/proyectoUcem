<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Nuevo Usuario (UCEM)</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-3" src="../img/logoUcem.png" alt="" width="250" height="125">
        <h2>Universidad de las Ciencias Empresariales</h2>
       


          <h4 class="mb-3">Formulario para Crear Cuenta</h4>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-3">
                <label for="firstName" class="form-label">Nombre Completo </label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" name="registroNombre" required>
                <div class="invalid-feedback">
                  Nombre completo es requerido.
                </div>
              </div>

              <div class="col-sm-3">
                <label for="lastName" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" name="registroApellidos" required>
                <div class="invalid-feedback">
                  Apellidos es requerdo.
                </div>
              </div>

              <div class="col-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" name="registroNombreUsusario" required>
                  <div class="invalid-feedback">
                    Nombre Ususario es requerido.
                  </div>
                </div>
              </div>

              <div class="col-3">
                <label for="username" class="form-label">Correo Eletrónico</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" placeholder="Correo Electrónico" name="registroCorreo" required>
                  <div class="invalid-feedback">
                  Correo Eletrónico es requerido.
                  </div>
                </div>
              </div>

              <div class="col-3">
                <label for="address" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="address" placeholder="" name="registroProvincia" required>
                <div class="invalid-feedback">
                  Provincia es requerido.
                </div>
              </div>

              <div class="col-3">
                <label for="address" class="form-label">Cantón</label>
                <input type="text" class="form-control" id="address" placeholder="" name="registroCanton" required>
                <div class="invalid-feedback">
                Cantón es requerido.
                </div>
              </div>

              <div class="col-md-3">
                <label for="country" class="form-label">Carrera</label>
                <select class="form-select" id="country" name="registroCarrera" required>
                  <option value="">Elegir Opción</option>
                  <option>Ingeniría en Sistenas</option>
                  <option>Ingeniría Industrial</option>
                  <option>Administración de Empresas</option>
                  <option>Cantabilidad</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione una Carrera Valida.
                </div>
              </div>

              <div class="col-3">
                <label for="address" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="address" placeholder="" name="registroTelefono" required>
                <div class="invalid-feedback">
                Teléfono es requerido.
                </div>
              </div>

              
            </div>

            <hr class="my-4">

            <button class=" btn btn-primary btn-lg" type="submit">Registrar</button>
            <a href="../inicio" class=" btn btn-primary btn-lg">Inicio</a>
            
          </form>
        </div>
      </div>
    </main>

    
  </div>
  </div>

  <script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

  </script>
</body>


</html>
<?php include 'footer.php';?>