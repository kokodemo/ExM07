<!DOCTYPE html>
<html>
<head>
	<title>Comprar productos</title>
</head>
<body>
<form>
	<h2>Añadir Productos al carro.
	</h2>
 
	<br>
	<label for="products">PRODUCTO</label>
	<br>
	<select id="prod" name="prod">
		<?php 
			$fichero=file('prod.txt');
			foreach ($fichero as $i) {
	  			$productos=explode(";", $i);
	 			if(sizeof($productos)==3){
	 				echo"<option>$productos[0]</option>";
	 			}
			}
		 ?>
	</select>
	<br>
	<br>
	<br>
	<label>CANTIDAD</label>
	<br>
	<input type="number" name="cantidad" step="0.1">
	<label>kg.</label>
	<br>
	<br>
	<br>	
	<a href="afegir_carro.php? producto=prod cant=cantidad"><input type="submit" value="Go!"></a>	


</form>


</body>
</html>