<?php
  //Determinar a classe - Molde
  class Filme{
    //Atributos - são os dados da classe - são as características
    //São os itens que preciso cadastrar de cada pessoa:
      
    private $idfilme;
    private $nomeFilme;
    private $idadeIndicativa;
    private $descricaoFilme;
      
  public function __construct(){
        
  }
      
  public function __get($atributo){
        return $this->$atributo;
  }
  public function __set($atributo,$valor){
        $this->$atributo = $valor;
  }    
      
  public function __toString(){
        return 
            "<br>ID do Filme: " .$this->idfilme.
            "<br>Nome do Filme " .$this->nomeFilme.
            "<br>Descrição do Filme: " .$this->descricaoFilme.
            "<br>Idade Permitida do Filme: " .$this->idadeIndicativa;
  }

  }


  ?>      
        