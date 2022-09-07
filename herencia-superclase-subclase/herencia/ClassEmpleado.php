<?php 
    require_once("ClassPersona.php");

//El extends es usado para indicar que es una subclase. Ejemplo:
//class subClase extends superClase
//De esta forma decimos que Empleado es una subclase de la clase super clase llamada Persona:
    class Empleado extends Persona{

//A continuación se declara una propiedad para getearle el puesto. Se declara como protected

        protected $strPuesto;



        function __construct(int $dpi, string $nombre, int $edad){
//Acá se le va a decir que vamos a utilizar el método constructor de su elemento padre, que en este caso en la clase Persona de quien está heredando.
            parent::__construct($dpi,$nombre,$edad);
        }


//Ahora se va a crear el método para getearle el puesto
        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }

//Luego se crea el get para obtener el puesto, como parámetro no va a obtener nada pero se le coloca :string para indicar que el valor a obtener será de ese tipo

        public function getPuesto():string{
//Aquí se configura el mensaje del puesto del empleado
        return "Puesto: {$this->strPuesto}";
        }


    }//End Class Empleado
?>