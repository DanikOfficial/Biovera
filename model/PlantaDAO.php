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

         $statement = $this->connection->prepare($sql);
         $statement->bindParam(':nome', $planta->getNome());
         $statement->bindParam(':preco', $planta->getPreco());
         $statement->bindParam(':descricao', $planta->getDescricao());
         $statement->bindParam(':dimensao', $planta->getDimensao());
         $statement->bindPara(':tipologia', $planta->getTipologia());
         $result = $statement->execute();

            if ($result) {
                echo "<script>alert('Planta Registada com Sucesso');</script>";
                return pesquisaPlantaPorNome($planta->getNome());
            } else {
                echo "<script>alert('Erro ao tentar registar planta.');</script>";
                return "Planta não encontrada";
            }
    }   

    public function alterar($codigo, $planta) {
        $sql = "UPDATE plantas SET nome = :nome, preco = :preco, descricao = :descricao, 
        + dimensao = :dimensao, tipologia = :tipologia WHERE codigo = :codigo";

        $nome= $planta->getNome();
        $preco = $planta->getPreco();
        $descricao = $planta->getDescricao();
        $dimensao = $planta->getDimensao();
        $tipologia = $planta->getTipologia();

        if ($this->connection) {
            $statement =$this->connection->prepare($sql);
            $result = $statement->execute([':nome' => $nome, ':preco' => $preco, 
            ':descricao' => $descricao, ':tipologia' => $tipologia, ':codigo' => $codigo]);

             if ($result) {
                echo "<script>alert('Planta atualizada com sucesso!');</script>";
             } else {
                echo "<script>alert('Erro ao tentar atualizar a planta!');</script>";
             }
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

    // Pesquisa Planta por Nome
    public function pesquisaPlantaPorNome($nome) {
        $sql = "SELECT codigo FROM plantas WHERE nome = :nome";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':nome', $nome);
        $statement->execute();
        $planta = $statement->fetch(PDO::fetch_OBJ);
        return $planta->codigo;
     }

     public function listaTodasPlantas() {
         $sql = "SELECT * FROM plantas";
         $statement = $this->connection->prepare($sql);
         $plantas = $statement->fetchAll(PDO::FETCH_OBJ);
     }
}

?>