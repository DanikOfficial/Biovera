<?php 

require_once(__DIR__.'/../model/PlantaModel.php');
require_once(__DIR__.'/../core/GenericController.php');

class Planta extends GenericController {

    function __construct() {
        $this->model = new PlantaModel();
    }

    // http://localhost/biovera/index.php/Planta/TodasPlantas/
    function TodasPlantas_get() {
        // Pega todas plantas
        $result = $this->model->listarTodasPlantas();
        // Manda todas plantas para a view
        $this->renderizarViewComArgumentos('home', $result);
    }

    // http://localhost/biovera/index.php/Planta/NovaPlanta/
    function NovaPlanta_get() {
        $this->load_view()

    }

    function RegistarPlanta_post(...$args) {
        
    }

    function AlterarPlanta_post(...$args) {

    }

}



?>