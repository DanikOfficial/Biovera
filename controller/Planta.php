<?php 

require_once(__DIR__.'/../model/PlantaModel.php');
require_once(__DIR__.'/../core/GenericController.php');

class Planta extends GenericController {

    function __construct() {
        $this->model = new PlantaModel();
    }

    function TodasPlantas_get() {

    }

    function NovaPlanta_get() {

    }

    function RegistarPlanta_get() {
        
    }

}



?>