<?php

//Empiezo definiendo las propiedades
//Public se puede acceder a esta variable desde cualquier lado
//Private nos limita. No se puede acceder ni de una sub clase (Clase que le hereda) ni dentro de la misma clase.
//Protected indica que se puede acceder a esta propiedad(variable) desde la misma clase donde se está creando y donde se hereda
//Static indica que la variable va a tener un valor inicial y que ese valor no va a cambiar. el static indica que la propiedad le pertenece a la clase, no al objeto cuando se crea, entonces se puede acceder desde cualquier lado sin necesidad de instanciar.
class Usuario{
    public $strNombre; //Esta variable no tiene ningún valor
    public $strEmail;
    public $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

//Acá se crea el método constructor
function __construct(string $nombre, string $email, string $tipo){
    $this->strNombre = $nombre;
    $this->strEmail = $email;
    $this->strTipo = $tipo; 
    $this->strClave = rand();
}

}//End Class Usuario



?>