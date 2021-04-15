<?php
    //Classe para fazer a interação do Back x Banco
    class ConexaoBanco extends PDO{
        //criando conexão com o banco
        private static $instance = null;
        //método construtor
        public function __construct($dsn, $user, $pass){
            //buscando atributos da classe PDO
            parent::__construct($dsn, $user, $pass);
        }

        //método para pegar a instancia e conectar com o banco
        public static function getInstance(){
            //verificando se existe uma conexão com o banco de dados ativa.
            if(!isset(self::$instance)){
                try{ //cria e retorna conexão com o banco.
                    self::$instance = new ConexaoBanco("mysql:dbname=bdteste;host=localhost","root","");
                }catch(PDOException $e){
                    echo "Erro ao conectar. ".$e;
                }
            }

            return self::$instance;

        }

    }

?>