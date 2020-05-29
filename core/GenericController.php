<?php 

    class GenericController {

        function __construct() {
            // Debug
            echo "Controller criado";
        }

        function load_view($view, $args) {
            foreach ($args as $vname => $vvalue) {
                $$vname = $vvalue;
            }
            require_once(__DIR__.'/../view/' .$view.'.php');
        }

    }


?>