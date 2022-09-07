<?php 
    require_once("ClassPersona.php");


    class Cliente extends Persona{

        protected $fltCredito;

        function __construct(int $dpi, string $nombre, int $edad){

            parent::__construct($dpi,$nombre,$edad);
        }

        public function setCredito(float $credito){
            $this->fltCredito = $credito;
        }

        public function getCredito():float{
//Aquí se configura el mensaje del crédito del cliente
// Acá no se puede hacer esto: return "Crédito del cliente: {$this->fltCredito}"; como se hizo en Empleado porque lo toma como un string. Entonces hay que hacerlo directamente en la creación del objeto en el archivo empresa.php en la línea 25
return $this->fltCredito;
        }


    }//End Class Empleado
?>