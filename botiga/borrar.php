<!DOCTYPE html>
<html>
<head>
	<title>Borrar Producto</title>
</head>
<body>
	<?php 
	
	if (isset($_GET["linea"])) {
		$idprod=$_GET["linea"];
		
		$fichero=file("prod.txt");
		unset($fichero($idprod));
/*no se como continua esto*/
	};


 ?>


</body>
</html>