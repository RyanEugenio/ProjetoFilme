<?php
    require 'persistence/conexaobanco.class.php';

    class FilmeDAOIndex {

        private $conexao = null;

    public function __construct(){
            $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct(){

    }
    public function buscarFilmeIndex(){
        try{
            $stat = $this->conexao->query("SELECT * FROM filme");

            $array = array();
            $array = $stat->fetchAll(PDO::FETCH_CLASS,'Filme');

            $this->conexao = null;
            return $array;

        }catch(PDOException $e){
            echo "Erro ao buscar Filmes. ".$e;
        }
    }
}
?>