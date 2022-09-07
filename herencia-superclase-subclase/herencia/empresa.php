<?php
    require_once("ClassEmpleado.php");

// El método constructor es el primero que se ejecuta al momento de instanciar una clase.
// Este es el constructor: function __construct(int $dpi, string $nombre, int $edad) está enClassEmpleado.php línea 15 
// En este caso los parámetros de new Empleado son un entero, un string y un entero. Los enteros no necesitan comillas, los string si lo necesitan
    $objEmpleado = new Empleado(5525,"Hey Arnold", 123);

// Acá se muestra el método getDatosPersonales de ClassPersona.php línea 17
// La clase empleado puede mostrar datos de la clase persona porque es una clase que hereda de la super clase ClassPersona.php
    echo $objEmpleado-> getDatosPersonales();







?>