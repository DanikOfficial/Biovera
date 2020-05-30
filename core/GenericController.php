<?php 

    class GenericController {

        function __construct() {
            // Debug
            echo "Controller criado";
        }

        // Metodo para renderizar view com argumentos
        function load_view($view, $args) {
            foreach ($args as $vname => $vvalue) {
                $$vname = $vvalue;
            }
            require_once(__DIR__.'/../view/' .$view.'.php');
        }
    }


?>