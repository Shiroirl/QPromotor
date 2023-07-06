<?php


Class Conexion{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $conexion;


    public function __construct(){
        require_once "database.php";
        $this->host = host;        
        $this->user = user;        
        $this->pass = pass;        
        $this->db = db;        
    }

    public function Conectar(){

        $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($this->conexion->connect_errno){
            die("Conexion Error: (". $this->conexion->connect_errno. ") " . $this->conexion->connect_error);
        }
    }

    public function Desconectar($conexion){

        $this->conexion->close();
        //mysqli_close($conexion);
    }

    public function Ejecutar($consulta){
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }
 
}   


?>