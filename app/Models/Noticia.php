<?php

require_once "app/conexao.php";
class Noticia extends Conexao
{
    private $id;
    private $titulo;
    private $idCategoria;
    private $conteudo;
    
    //retorna todas as noticias do banco de dados
    public function selectNoticias()
    {
        $query = "SELECT * FROM noticia";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function selectUniNoticia()
    {
        $query = "SELECT * FROM noticia WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->id);
        $stmt->execute();
        return $stmt->fetch();
    }

    //pesquisa noticias no banco de dados
    public function pesquisa()
    {
        $query = "SELECT * FROM noticia WHERE  titulo LIKE :titulo";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":titulo", $this->titulo."%");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
   
    //cadastra noticias no banco de dados
    public function cadastra()
    {
        $query = "INSERT INTO noticia (titulo, idCategoria, conteudo) VALUES (:titulo, :idCategoria, :conteudo)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':idCategoria', $this->idCategoria);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->execute();

        //verifica se foi cadastrado
        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function atualiza()
    {
        $query = "UPDATE noticia SET titulo = :titulo, conteudo = :conteudo WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':conteudo', $this->conteudo);
        $stmt->execute();

    }

    public function remove()
    {
        $query = "DELETE FROM noticia WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->id);
        $stmt->execute();

        
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setIdCategoria($categoria)
    {
        $this->idCategoria = $categoria;
    }

    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }   

    //geters

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getConteudo()
    {
        return $this->conteudo;
    }
}
