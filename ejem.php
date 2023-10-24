<?php
if ($_POST) {
	$nombre = $_POST['Nombre'];
	$ap = $_POST['apellido'];
	$fecha = $_POST['fecha'];

		
	print("Nombre es:".$nombre."<p>"."EL apellido es:".$ap."<p>"."la fecha es:".$fecha."<p>");


	if (isset($_POST['Hombre'])) {
    
    print("el genero es Hombre");
  }
  if (isset($_POST['Mujer'])) {
 
  print("El genero es Mujer");
  }
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action="ejem.php">
	Nombre:
	<input type="text" name="Nombre">
	Apellido:
	<input type="text" name="apellido">
      fecha:
	<input type="date" name="fecha">
	Hombre:
	<input type="checkbox" name="Hombre" value="Hombre">
	Mujer:
	<input type="checkbox" name="Mujer" value="Mujer">
	<input type="submit" name="submit">
</form>
</body>
</html>