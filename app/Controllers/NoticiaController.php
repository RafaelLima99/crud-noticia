<?php

require_once "app/Models/Noticia.php";
require_once "app/Models/Categoria.php";

class NoticiaController
{
    public function cadastro()
    {
        //verifica se exite os posts titulo, categoria e conteudo
        if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['conteudo'])){

            $titulo    = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $conteudo  = $_POST['conteudo'];

            //verifica se as variaveis não estão vazias
            if(!empty($titulo) && !empty($categoria) && !empty($conteudo)){
         
                $noticia = new Noticia();
                $noticia->setTitulo($titulo);
                $noticia->setIdCategoria($categoria);
                $noticia->setConteudo($conteudo);
                //o metodo cadasra, cadastra os dados
                if($noticia->cadastra()){
                    echo "<script>alert('Cadastrado com sucesso!')</script>"; 
                }else{
                    echo "<script>alert('Erro ao cadastrar!')</script>"; 
                }

            }else{
                echo "<script>alert('Porfavor preencha todos os campos!')</script>";
            }
        }

        
    }

    public function categoria()
    {
        $categoria = new Categoria();
        
        return $categoria->selectCategorias();
        
    }
}
