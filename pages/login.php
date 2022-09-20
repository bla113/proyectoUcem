<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Ingreso Estudiantes</title>


  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  
  <!-- Hoja de Estilos Css -->
  <link href="../css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
    <form action="../modulos/ingresar.php"  method="POST">
      <img class="mb-4" src="../img/logoUcem.png" alt="LogoUcem" width="250" height="125">
      <h1 class="h3 mb-3 fw-normal">Ingrese Credenciales</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="login">
        <label for="floatingInput">Correo Electrónico</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="password" >
        <label for="floatingPassword">Contraseña</label>
      </div>
       <a href="frmCrearCuenta.php">Crear Cuenta</a>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>



</body>

</html>