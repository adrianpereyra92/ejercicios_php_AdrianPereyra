<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Ejercicio 1 - PHP</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
        <?php echo "<h3>Hola mundo!</h3>"; ?>
    <hr>
    <h2>Ejercicio 2</h2> 
        <?php $saludo = "Hello World!";
            echo $saludo; ?>
    <hr>        
    <h2>Ejercicio 3</h2>
        <?php   
            $numero1 = 10;
            $numero2 = 5; 

            $resultado = $numero1+$numero2;
            echo "$numero1+$numero2=$resultado <br>";

            $resultado = $numero1-$numero2;
            echo "$numero1 - $numero2 = $resultado <br>";

            $resultado = $numero1*$numero2;
            echo "$numero1 * $numero2 = $resultado <br>";

            $resultado = $numero1/$numero2;
            echo "$numero1 / $numero2 = $resultado <br>";

            $resultado = $numero1%$numero2;
            echo "$numero1 % $numero2 = $resultado <br>";

            $resultado = $numero1**$numero2;
            echo "$numero1 ** $numero2 = $resultado";
        ?>
    <hr>
    <h2>Ejercicio 4</h2>
        <?php 
            $celsius = 20;
            $fahrenheit = $celsius*1.8+32;

            echo "$celsius * 1.8 + 32 = $fahrenheit";
        ?>
    <hr>
    <h2>Ejercicio 5</h2>
    <h3>a)</h3>
    <h4>Perímetro rectángulo</h4>
        <?php
            $ladoX=18;
            $ladoY=12;
            $perimetro=$ladoX*2 + $ladoY*2;
            echo "$ladoX*2 + $ladoY*2 = $perimetro<br>";
        ?>
            <br>

    <h4>Área rectángulo</h4>
    
        <?php
            $altura=12;
            $base=18;
            $area=$altura*$base;
            echo "$altura*$base=$area<br>";
        ?>
     <hr>    
    <h3>b)</h3>
    <h4>Perímetro círculo</h4>
      <?php
      $radio=30;
      $pi=3.1416;
      $perimetroCirculo=$pi*$radio*2 ;
      echo "$pi*$radio=$perimetroCirculo<br>";?>
      <hr>
    <h4>Circulo Area</h4>
      <?php
      $radio=30;
      $pi1=3.1416;
      $areaCirculo=$pi * $radio ** $radio;
      echo "$pi * $radio ** $radio = $areaCirculo<br>";?>
      <hr>
    
        
   
</body>
</html>