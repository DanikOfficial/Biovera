<?php 
require_once(__DIR__.'/database/Connection.php');

/**
 * Classe com operações básicas de qualquer classe que for Modelo
 */
class GenericModel {

    function __construct() {
        echo "Criado o Generic Model";

        // abre conexão com a base de dados ao instanciar a classe Model
        $db = new Connection();
        $this->connection =  $db->getConnection();
    }

    function create($tableName,$insertWhat) {}

    function read($tableName, $args, $whereArgs) {}

    function update($tableName, $whatToSet, $whereArgs){}

    function delete($tableName, $whereArgs){}

    function where($sql, $whereArgs) {}


}

?>