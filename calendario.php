<!DOCTYPE html>
<html>
<head>
	<title>Calendari</title>
</head>
<body>
	<div>
<table border="1">

	<tr>
		<caption>Calendari</caption>
	<tr> 
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
		<th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>
		
<?php 
				#$lista=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo")
				
				for ($i=0; $i < 31; $i++) { 
				 	
				 	if ($i==0) {
				 		echo"<tr>";
				 	}

				 	elseif ($i%7==0) {
				 		echo"</tr>
				 		<tr>";
				 		
				 	
				 	}
				 	echo "<td>$i<td>\n";
				 } 
 ?>	

		
	</tr>
	

</table>
</div>

</body>
</html>