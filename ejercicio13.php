<?php
if ($_POST) {
    $boton = $_POST['btnValor'];
    switch ($boton) {
        case 1:
            echo "Presionó el botón 1";
            break;
        case 2:
            echo "Presionó el botón 2";
            break;
        case 3:
            echo "Presionó el botón 3";
            break;
        default:
            echo "Botón no reconocido";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
       <input type="submit" name="btnValor" value="1">
<input type="submit" name="btnValor" value="2">
<input type="submit" name="btnValor" value="3">

    </form>
</body>
</html>
