<?php 

    class GenericController {

        function __construct() {
            // Debug
            echo "Controller criado";
        }

        // Metodo para renderizar view com argumentos
        function renderizarViewComArgumentos($view, $args) {
            foreach ($args as $vname => $vvalue) {
                $$vname = $vvalue;
            }
            require_once(__DIR__.'/../view/' .$view.'.php');
        }

        // Metodo para renderizar view sem argumentos
        function renderizarView($view) {
            require_once(__DIR__.'/../view/' .$view.'.php');
        }

    }


?>