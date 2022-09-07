<?php
// Diferencia entre Require e include es que require detiene el proceso cuando hay un error dentro del archivo que hace el llamado mientras que include no detiene el proceso. Por lo general se usa Require para evitar ese tipo de inconvenientes
    require_once ("ClassOperacion.php");

//Ahora se crea el primer objeto
    $operacion1 = new Operacion(10,2);
    
    echo "<h2><u>Esto es Operación 1</u></h2>";

    $totalSuma = $operacion1 -> getSuma();
    echo "<b>Total Suma: </b>".$totalSuma;?><br><?php
    
    $totalResta = $operacion1 -> getResta();
    echo "<b>Total Resta: </b>".$totalResta;?><br><?php
    
    $totalMultiplicacion = $operacion1 -> getMultiplicacion();
    echo "<b>Total Multiplicación: </b>".$totalMultiplicacion;?><br><?php
    
    $totalDivision = $operacion1 -> getDivision();
    echo "<b>Total División: </b>".$totalDivision;?><br><?php
    
//Creación de segundo objeto
    $operacion2 = new Operacion(100,3);    
    echo "<br><br><br><br>";
    echo "<h2><u>Esto es Operación 2</u></h2>";

    $totalSuma = $operacion2 -> getSuma();
    echo "<b>Total Suma: </b>".$totalSuma;?><br><?php
    
    $totalResta = $operacion2 -> getResta();
    echo "<b>Total Resta: </b>".$totalResta;?><br><?php
    
    $totalMultiplicacion = $operacion2 -> getMultiplicacion();
    echo "<b>Total Multiplicación: </b>".$totalMultiplicacion;?><br><?php
    
    $totalDivision = $operacion2 -> getDivision();
    echo "<b>Total División: </b>".$totalDivision;?><br><?php

?>