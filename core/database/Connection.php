<?php 

class Connection {

    function __construct() {

        // Script de configurações ex: dados para conexão com BD
        require_once(__DIR__.'/../../config/database.php');

        // Cria novo array associativo baseado no array de configurações contido no script de confgurções
        $this->db_params = $db_params;
    }

    function getConnection() {
        $hostname = 'mysql:host='. $this->db_params['servername'].';dbname=' . $this->db_params['dbname'];
        $username = $this->db_params['username'];
        $password = $this->db_params['password'];

        try {
            $conn = new PDO($hostname, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            $e->getMessage();
            return false;
        }
    }
}

?>