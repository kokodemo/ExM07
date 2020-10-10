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

foreach ($filas as $i) {
	 
	 $todo=explode(";", $i);
	 echo"<tr><td>$todo[0]</td>
	 <td>$todo[1]</td>
	 <td>$todo[2]</td>";
	 
	 
};

echo"</table>";

?>

</body>
</html>

