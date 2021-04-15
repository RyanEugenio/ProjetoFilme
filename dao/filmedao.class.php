<?php

    require '../persistence/conexaobanco.class.php';

    class FilmeDAO {

        private $conexao = null;

        public function __construct(){
            $this->conexao = ConexaoBanco::getInstance();
        }

        public function __destruct(){

        }
        //Função para cadastrar Filme
        public function cadastrarFilme($filme){
            try{
                $stat = $this->conexao->prepare("INSERT INTO filme (idfilme,nomeFilme,idadeIndicativa,descricaoFilme)VALUES(NULL,?,?,?)");
                $stat->bindValue(1,$filme->nomeFilme);
                $stat->bindValue(2,$filme->idadeIndicativa);
                $stat->bindValue(3,$filme->descricaoFilme);
                
                $stat->execute();
            }catch(PDOException $e){
                echo "Erro ao cadastrar Filme. ".$e;
            }
        }
        //Função para buscar Filme
        public function buscarFilme(){
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
        //Função para deletar Filme
        public function deletarFilme($idfilme){
            try{
                $stat = $this->conexao->prepare("DELETE FROM filme WHERE idfilme=?");

                $stat->bindValue(1,$idfilme);

                $stat->execute();

                $this->conexao = null;
            }catch(PDOException $e){
                echo "Erro ao deletar Filme. ".$e;
            }
        }
        //Função para buscar Filme e enviar para o alterar
        public function buscar($query){
            try {
              $stat = $this->conexao->query("SELECT * FROM filme ".$query);
              $array = $stat->fetchAll(PDO::FETCH_CLASS,'Filme');
              $this->conexao = null;
              return $array;
            } catch (PDOException $e) {
              echo "Erro ao buscar filme. ".$e;
            }
          }
        //Função para alterar Filme
        public function alterarFilme($filme){
            try{

                $stat = $this->conexao->prepare("UPDATE filme SET nomeFilme = ?, idadeIndicativa = ?, descricaoFilme = ? WHERE idfilme = ?");

                $stat->bindValue(1,$filme->nomeFilme);
                $stat->bindValue(2,$filme->idadeIndicativa);
                $stat->bindValue(3,$filme->descricaoFilme);
                $stat->bindValue(4,$filme->idfilme);

                $stat->execute();
                $this->conexao = null;

            }catch(PDOException $e){
                echo "Erro ao alterar Filme".$e;
            }
        }

    }

?>