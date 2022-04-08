<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Validación</title>
  </head>
  <body>

  <div class="container">


<?php
  $nombre = $email = $genero = $comentario = $web = "";

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $nombre = test_input($_POST['nombre']);
    $email = test_input($_POST['email']);
    $web = test_input($_POST['web']);
    $genero = test_input($_POST['genero']);
    $comentario = test_input($_POST['comentario']);

  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>


  <h2>Validación y Escapado en PHP</h2>

<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

  Nombre: <input class="form-control" style="width: 200px" type="text" name="nombre">
  <br>
  Email: <input class="form-control" style="width: 200px"  type="text" name="email">
  <br>
  Web: <input class="form-control" style="width: 200px"  type="text" name="web">
  <br>
  Comenario: <textarea class="form-control" name="comentario" rows="3" cols="20"></textarea>
  <br>
  Genero:
  <div class="radio">
  <input type="radio" name="genero" value="femenino"> Femenino  
  </div>
    <div class="radio">
  <input type="radio" name="genero" value="masculino"> Masculino  
  </div>
    <div class="radio">
  <input type="radio" name="genero" value="otro"> Otro
  </div>
<br>

<input type="submit" name="submit" value="Enviar" class="btn-danger">
</form>

<?php

echo "<h2>Su entrada es: </h2>";
echo $nombre;
echo "<br>";
echo $email;
echo "<br>";
echo $web;
echo "<br>";
echo $genero;
echo "<br>";
echo $comentario;

?>

<br><br>
</div>




 <!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



  </body>
  </html>
