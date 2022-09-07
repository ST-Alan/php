<?php
class Usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;
    protected $strFechaRegistro;
    static $strEstado = "Activo";

//Acá se crea el método constructor
function __construct(string $nombre, string $email, string $tipo){
    $this->strNombre = $nombre;
    $this->strEmail = $email;
    $this->strTipo = $tipo; 
    $this->strClave = rand();
    $this->strFechaRegistro = date('Y-m-d H:m:s');
}

//Para acceder a las propiedades privadas se deben crear los métodos geter y seter como función pública

    public function getNombre():string{
        return $this->strNombre;
    }

    public function getEmail():string{
        return $this->strEmail;
    }

    public function getTipo():string{
        return $this->strTipo;
    }

    public function getClave():string{
        return $this->strClave;
    }
//Función que tiene todos los datos para mostrar el perfil
public function getPerfil(){
    echo "<h2>Datos del Usuario</h2>";
    echo "Nombre: ".$this->strNombre."<br>";
    echo "Email: ".$this->strEmail."<br>";
    echo "Fecha de Registro: ".$this->strFechaRegistro."<br>";
    echo "Clave: ".$this->strClave."<br>";
    echo "Estado: ".self::$strEstado."<br>";
}

//Ahora creamos un seter
//Función que permite modificar la contraseña
public function setCambiarClave(string $pass){
    $this->strClave = $pass;
}


}//End Class Usuario



?>