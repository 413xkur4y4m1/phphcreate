<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    $valorC= $_POST['valorC'];

    print("primer valor:". $valorA."<p>"."2 valor:".$valorB."<p>"."3 valor:".$valorC."<p>");
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
    <form action="ejercicioex.php" method="post">
        Valor A:
        <input type="text" name="valorA" id=""><br/>
       
        Valor B:
        <input type="text" name="valorB" id=""><br/>
        Valor C:
        <input type="number" name="valorC" id=""><br/>
    
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
