<?php

class Conexao
{
  public $db;

  public function __construct()
  {
    try{
      $conn = new PDO(
          "mysql:host=localhost;dbname=crud;charset=utf8",
          "root",
          ""
      );
      
      $this->db = $conn;  

    }catch(PDOException $erro){
      echo "<strong>Erro de conexão</strong> ".$erro;
    }
  }
}