<?php 
    class conexion  
    {
        private $host;
        private $user;
        private $pass;
        private $db;

        public function __construct() {
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->db = "practica";
        }

        public function EstablecerConexion(){
            $conexion = new mysqli($this->host,$this->user,$this->pass, $this->db);
            return $conexion;
        }
    }
    
?>