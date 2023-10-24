<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;

    echo "<p>Suma: " . $suma . "</p>";
    echo "<p>Resta: " . $resta . "</p>";
    echo "<p>Multiplicación: " . $multiplicacion . "</p>";
    echo "<p>División: " . $division . "</p>";
    if ($valorA==$valorB) {
        echo"el valor de A es IGUAL que el valor B <br>";
        if ($valorA==4) {
            echo"el valor de A es 4 <br>";

        }
            if ($valorA==5) {
                echo"el valor de A es 5 <br>";
            }
          }  
            if(($valorA==$valorB)&& ($valorA==4)){
                    echo"El valor de A es igual a B y es un numero 4";
                }
            }
        
    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id=""><br/>
       
        Valor B:
        <input type="text" name="valorB" id=""><br/>
    
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
