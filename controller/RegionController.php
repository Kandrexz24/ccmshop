<?php

    class Region_controller{
        
        public function index(){
            require_once "model/RegionModel.php";
            $region = new Region_model();
            $data["titulo"] = "Region";
            $data["region"] = $region->get_region();

            require_once "view/mantenedor.php";
        }
    }

?>