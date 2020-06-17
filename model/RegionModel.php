<?php
class regionModel{
    private $db;
    private $region;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->region=array();
    }
    public function get_region(){
        $consulta=$this->db->query("select * from region;");
        while($filas=$consulta->fetch_assoc()){
            $this->region[]=$filas;
        }
        return $this->region;
    }
}
?>