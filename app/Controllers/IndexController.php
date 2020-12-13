<?php
require_once "App/Models/Noticia.php";  

class IndexController
{   
    public function controNoticias()
    {
        $noticia = new Noticia();

        //se existir o metodo get busca
        if(isset($_GET['busca'])) {

            $pesquisa = $_GET['busca'];

            //verifica se está vazio
            if(!empty($pesquisa)){
                $noticia->setTitulo($pesquisa);
                return $noticias = $noticia->pesquisa();

            }else{
                echo"<script> alert('Porfavor, preencha o campo!') </script>";
                return $noticia->selectNoticias();
            }
        
        // caso não exita o get busca retorna todas as noticias do banco de dados
        }else{
            return $noticia->selectNoticias();
        }
    }
}
