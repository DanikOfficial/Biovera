<?php 

require_once(__DIR__.'/../model/PlantaModel.php');
require_once(__DIR__.'/../core/GenericController.php');

class Planta extends GenericController {

    function __construct() {
        echo 'Planta controller<br>';
        $this->model = new PlantaModel();
    }

    /**
     * Renderiza a view responsavel por mostrar todas plantas
     * ex: http://localhost/Biovera/index.php/Planta/TodasPlantas/
     * */
    function TodasPlantas_get(...$args) {
        echo 'Teste';
        // Pega todas plantas
        $plantas = $this->model->listarTodasPlantas();
        // Manda todas plantas para a view
        $this->renderizarViewComArgumentos('plantas', $plantas);
    }

    // ex: http://localhost/biovera/index.php/Planta/NovaPlanta/
    function NovaPlanta_get() {
        echo 'Inside Nova Planta';

    }

    function RegistarPlanta_post(...$args) {
        
    }

    function AlterarPlanta_post(...$args) {

    }

    function PesquisaPlantaPorNome_get(...$args) {

    }

}



?>