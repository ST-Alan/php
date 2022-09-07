<?php
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");

// El método constructor es el primero que se ejecuta al momento de instanciar una clase.
// Este es el constructor: function __construct(int $dpi, string $nombre, int $edad) está enClassEmpleado.php línea 15 
// En este caso los parámetros de new Empleado son un entero, un string y un entero. Los enteros no necesitan comillas, los string si lo necesitan
    $objEmpleado = new Empleado(5525,"Hey Arnold", 123);

//Con la siguiente línea de código se configura el puesto:
    $objEmpleado->setPuesto("Administrador");
// Acá se muestra el método getDatosPersonales de ClassPersona.php línea 17
// La clase empleado puede mostrar datos de la clase persona porque es una clase que hereda de la super clase ClassPersona.php
    echo $objEmpleado-> getDatosPersonales();
//Con la siguiente línea obtenemos el puesto que fué seteado en la línea 10:$objEmpleado->setPuesto("Administrador");
    echo $objEmpleado-> getPuesto();


// Se duplica para crear un objeto cliente:
    $objCliente = new Cliente(4321,"Alan", 33);

    $objCliente->setCredito(100000);
    
    echo $objCliente-> getDatosPersonales();
    echo "El crédito del cliente es: {$objCliente-> getCredito()}"







?>