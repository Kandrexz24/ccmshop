<?php
require_once 'model/region.php';

class regionController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new region();
    }
    
    public function Index(){
        require_once 'view/CrudRegion/mantenedor.php';
       
    }
    
    public function Crud(){
        $region = new region();
        
        if(isset($_REQUEST['ID'])){
            $region = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/CrudRegion/mantenedor.php';
        
    }
    
    public function Guardar(){
        $region = new region();
        
        $region->ID = $_REQUEST['ID'];
        $region->COD_REG = $_REQUEST['COD_REG'];
        $region->DESC_REG = $_REQUEST['DESC_REG'];   
      

        $region->ID > 0 
            ? $this->model->Actualizar($region)
            : $this->model->Registrar($region);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID']);
        header('Location: index.php');
    }
}