<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <title>Operaciones</title>
  </head>
  <body>
    <?php
      $tipo = $_POST['tipo'];
      $a = $_POST['a'];
      $b = $_POST['b'];
    ?>

<div class="container">
      <h1>Resultado de la Operación</h1>
    <br>


    <?php
      echo "<b>"."Estructura Switch case"."</b>"."<br>";

      switch ($tipo) {
        case 'suma':
          $s = $a+$b;
          echo "La suma es: ".$s." <br>";
          break;
        case 'resta':
          $s = $a-$b;
          echo "La resta es: ".$s." <br>";
          break;
          case 'multiplicacion':
          $s = $a*$b;
          echo "La multiplicación es: ".$s." <br>";
          break;
          case 'division':
          $s = $a/$b;
          if ($b==0) {

            echo "No es posible dividir por cero "." <br>";

            echo "Vuelva a ingresar los datos "." <br>";

          }else{
            echo "La Divisón es: ".$s." <br>";  
          }
          
          break;

        default:
          echo "Ingrese un valor numérico";
          break;
      }
    
echo "<b>"."Estructura IF-ELSE"."</b>"."<br>";

if ($a==$b) {

  echo "El numero ".$a." Es igual que numero ".$b." <br>";

}else{
  
  echo "El numero ".$a." Es diferente al numero ".$b." <br>";
}

if ($a>$b) {
  
  echo "El numero ".$a." Es mayor que numero ".$b." <br>";

}

if ($a<$b) {
  
  echo "El numero ".$a." Es menor que numero ".$b." <br>";
}
    ?>

</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>
