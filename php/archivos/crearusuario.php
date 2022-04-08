<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Crear Usuario</title>
  </head>
  
  <body>

  <div class="container">
    <h2>Crear usuario</h2>
<a href="index.html"> <p align="center"><img src="imagenes/cantando.jpg" height="50" name="Inicio"> </p> </a>

<form class="mdi mdi-format-horizontal-align-center" action="Archivotxt.php" role="form" method="POST">

  <div class="mdi mdi-abacus">
    <label>Identificación</label">
    <input type="text" class="form-control" name="id" placeholder="Ingrese su Id">
  </div>

  <div class="mdi mdi-abacus">
    <label>Nombres:</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre">
  </div>

  <div class="mdi mdi-abacus">
    <label>Apellidos:</label>
    <input type="text" class="form-control" name="apellido" placeholder="Ingrese sus Apellidos">
  </div>

  <div class="mdi mdi-abacus">
    <label>Email:</label>
    <input type="text" class="form-control" name="email" placeholder="Ingrese su Email">
  </div>
  <div class="mdi mdi-abacus">
    <label>Rol:</label>
    <input type="text" class="form-control" name="rol" placeholder="Ingrese su Rol">
  </div>
<div class="mdi mdi-abacus">
    <label>Fecha Nacimiento</label>
    <input type="date" class="form-control" name="nacimiento" placeholder="Ingrese la fecha de nacimiento">
  </div>
  <div class="mdi mdi-abacus">
    <label>Fecha Ingreso</label>
    <input type="date" class="form-control" name="fechaingreso" placeholder="Ingrese la fecha de Ingreso">
  </div>
  
<p></p>
<p></p>

  <button type="submit" name="btninsertar" class="btn btn-success">Guardar Reporte</button>

  <button type="reset" name="btnlimpiar" value="Borrar" class="btn btn-outline-secondary">Limpiar</button>

</form>

</div>
</body>

    <!-- Optional JavaScript; choose one of the two! -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>

