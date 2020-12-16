<?php

require_once "app/conexao.php";

class Categoria extends Conexao
{
    private $id;
    private $nome;

    public function cadastra()
    {
        $query = "INSERT INTO categoria (nome) VALUES (:nome)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->execute();
        return true;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}