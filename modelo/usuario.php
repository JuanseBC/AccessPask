<?php
    class usuario_modelo{
        private $db;
        private $usuario;

        public function __construct(){
            $this->db=Conectar::conexion();
            $this->usuario=array();
        }    
        public function get_usuario(){
            $consulta=$this->db->query("select * from usuario;");
            while($filas=$consulta->fetch_assoc()){
                $this->usuario[]=$filas;
            }
        
                return $this->usuario;
        }
    }
?>