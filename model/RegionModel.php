<?php

    class Region_model{

        private $db;
        private $region;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->region = array();
        }

        public function get_region(){
            $sql = "select * from region";
            $resultado = $this->db->query($sql);

            while($row = $resultado->fetch_assoc()){
                $this->region[] = $row;
            }
            return $this->region;
        }
    }

?>