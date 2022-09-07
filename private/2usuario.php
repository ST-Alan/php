<?php
require_once("2perfilUsuario.php");

$objUsuario2 = new Usuario("Alan Fermin", "contacto@alanfermin.com","Admin");
$objUsuario3 = new Usuario("Paulo Fermin", "contacto@srpafermin.com","Admin");

echo $objUsuario2 -> getperfil();

echo "<br><br>";

echo $objUsuario2->getPerfil();
$objUsuario2->setCambiarClave("2485525");

echo "<br><br>";
echo $objUsuario2->getPerfil();


?>