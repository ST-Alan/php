<?php 

    require_once ("ClassUsuario.php");
//Acá instancio
    $objUsuarioUno = new Usuario("Alan Fermin","contacto@alanfermin.com","Admin");

    $nombreUsuario1 = $objUsuarioUno->strNombre; //Esto sería con variable pública
    echo "<h3>El nombre del usuario es: ".$nombreUsuario1."</h3>";
    echo "<br>";

    $emailUsuario1 = $objUsuarioUno->strEmail;
    echo "<h3>El email del usuario es: ".$emailUsuario1."</h3>";
    echo "<br>";

    $tipoUsuario1 = $objUsuarioUno->strTipo;
    echo "<h3>El tipo del usuario es: ".$tipoUsuario1."</h3>";
    echo "<br>";

    $tipoUsuario1 = $objUsuarioUno->strClave;
    echo "<h3>El tipo del usuario es: ".$tipoUsuario1."</h3>";
    echo "<br>";


//La variable estática se coloca de la siguiente forma ya que no es específica de una función
    echo Usuario::$strEstado;

?>