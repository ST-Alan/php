<?php
    class Persona{
//Se declaran las propiedades
        public $intDpi;
        public $strNombre;
        public $intEdad;

//Se declara el método constructor
        function __construct(int $dpi, string $nombre, int $edad){
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

//Ahora creo un nuevo método de tipo public

        public function getDatosPersonales(){
            $datos = "
                <h2>DATOS PERSONALES</h2>
                DPI: {$this->intDpi}<br>
                
            ";
        }



    }//End class Persona

?>