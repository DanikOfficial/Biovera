<?php 
require_once(__DIR__.'/../core/database/Connection.php');
require_once(__DIR__.'/../model/PlantaModel.php');

class PlantaDao {

 // Abre nova conexão sempre que instanciar a classe PlantaDao
    function __construct() {
        $this->db = new Connection();
        $this->connection = $db->getConnection();
    } 

    public function registar($planta) {
        $sql = "INSERT INTO plantas(nome,preco,descricao,dimensao,tipologia) 
        + VALUES(:nome,:preco,:descricao,:dimensao,:tipologia)";

        $nomePlanta = $planta->getNome();
        $precoPlanta = $planta->getPlanta();
        $descricao = $planta->getDescricao();
        $dimensao = $planta->getDimensao();
        $tipologia = $planta->getTipologia();
        
        if ($this->connection) {
            $statement = $this->connection->prepare($sql);
            $result = $statement->execute([':nome' => $nomePlanta, ':preco' => $precoPlanta, ':descricao' => $descricao, 
            ':dimensao' => $dimensao,':tipologia' => $tipologia]);

            if ($result) {
                echo "<script>alert('Planta Registada com Sucesso');</script>";
            } else {
                echo "<script>alert('Erro ao tentar registar planta.');</script>";
            }
            
        } else {
            echo "<script>alert('Erro ao tentar Estabelecer conexã!');</script>";
        }
    }   


    public function apagar($codigo) {
        $sql = "DELETE FROM plantas WHERE codigo = :codigo";       
                
        if ($this->connection) {
            $statement = $this->connection.prepare($sql);
            $result = $statement->execute([':codigo' => $codigo]);
            if ($result) {
                echo "<script>alert('Planta apagada com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro ao tentar apagar planta!');</script>";
            }
        } else {
            echo "<script>alert('Erro ao tentar Estabelecer conexã!');</script>";

        }

    }

    public function alterar($codigo, $planta) {

    }

    public function pesquisaPlantaPorCodigo($codigo) {

    }

}

?>