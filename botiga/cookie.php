<<?php 
session_start();

echo "<p>Pàgina 1</p>";

if (isset($_SESSION["producte"])) {
	echo "<p>Producte: ".$_SESSION["producte"]."</p>\n";

	}
else {
	echo"<p> No hi ha cap producte</p>\n";

	$_SESSION["producte"] = "Guacamole";
 
}

 ?>