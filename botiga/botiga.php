<!DOCTYPE html>
<html>
<head>
	<title>Botiga</title>
	<style type="text/css">
			td{
				border-style: solid;
				border-width: 2px;
			}
	</style>
</head>
<body>
	<?php
$filas=file('prod.txt');
echo"<table>";
echo"<th>Name</th>
<th>Description</th>
<th>Price</th>";
$contador=0;
foreach ($filas as $i) {
	 
	 $todo=explode(";", $i);
	 if(sizeof($todo)==3){
		 echo"<tr><td>$todo[0]</td>
		 <td>$todo[1]</td>
		 <td>$todo[2]</td>

		 <td><a href='borrar.php? linea=$contador'><img src='papelera.ico' height='30px' width='30px' ></a></td>";
		 $contador=$contador+1;

	 };
};

echo"</table>";

?>

</body>
</html>

