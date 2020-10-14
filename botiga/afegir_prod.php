<!DOCTYPE html>
<html>
<head>
	<title>Insertar Prod</title>
</head>
<body>
	<p>Name: <?php echo $_POST["name"]; ?></p><br>
	<p>Description: <?php echo $_POST["desc"]; ?></p><br>
	<p>Price: <?php echo $_POST["price"]; ?></p><br>
	<?php   
	if ($_SERVER["REQUEST_METHOD"]=="POST" 
		&& isset($_POST["name"])
		 && isset($_POST["desc"])
 		 && isset($_POST["price"]))
	 {	
		$fichero=fopen("prod.txt",'a');
		fwrite($fichero, "\n");
		fwrite($fichero, htmlspecialchars($_POST['name']));
		fwrite($fichero, ';');
		fwrite($fichero, htmlspecialchars($_POST['desc']));
		fwrite($fichero, ';');
		fwrite($fichero, htmlspecialchars($_POST['price']));
	} else {
		echo"<p>No se han entrado datos correctamente.</p>";

	}
	?>
	<a href="botiga.php">Volver</a>
</body>
</html>