<?php
    require_once "config/database.php";
    require_once "controller/RegionController.php";

    $control = new Region_controller();
    $control->index();
?>