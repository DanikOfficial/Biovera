<?php 

/**
 * Importando controllers
 */

require('./controller/Planta.php');


    // Pega o inicio dos argumentos depois do /index.php/
    function getArgumentStart($uri) {
        foreach($uri as $key => $value) {
            if($value == 'index.php') {
                if ($key == count($uri) - 1) return -1;
                return $key + 1;
            }
        }
    }

    // Roteamento de Urls para seu devido controller
    function main() {

        // pega a URL que acedeu ao index.php
        $uri =  parse_url($_SERVER['REQUEST_URI']);

        // divide o url por "/" e constroi um array com cada palavra resultante da divisão
        $parameters = explode('/', $uri['path']);

        // pega o inicio de onde o controller inicia no url
        $start = getArgumentStart($parameters);

        // Roteamento e Tratamento Simples de erro no caso de url inválido
        if ($start != -1) {
            // pega o nome do controller baseado no indice onde ele se encontra
            $controller_name = $parameters[$start];

            // Pega o tipo de Request method enviado ao index.php e converte para letras minusculas, que sera a mesma função
            $function_name = $parameters[$start + 1] . "_" . strtolower($_SERVER['REQUEST_METHOD']);
            echo 'function name: ' . $function_name;

 

            // definindo o indice correcto do inicio dos parametros
            $start += 2;

      // constroi um array que será responsável por armazenar o resto dos parametros
          $args = array();

            /** 
             * enquanto o inicio for menor que o numero de parametros 
             * executa esse ciclo e insere cada parametro em um indice do array
             * */ 
            for (;$start < count($parameters); $start++) {
                // insere o parametro da iteração corrente ao array "$args"
                array_push($args, $parameters[$start]);
            }

            /**
             * Instancia o controller => "$controller_name" do parametro e chama a função => "$function_name" 
             * e passa seus respectivos argumentos $args como parametro
             * ilustração: "$controller_name->$function_name($args)"
             * */
            call_user_func_array(array(new $controller_name, $function_name), $args);

        } else {

            echo '<h1>Error</h1>';
        }

    }

    main();

?> 