<?php
require_once "App/Models/Noticia.php";  

        $noticias = null;

        $n = new Noticia();

        //se existir o metodo get busca
        if(isset($_GET['busca'])) {

            $pesquisa = $_GET['busca'];

            //verifica se está vazio
            if(!empty($pesquisa)){
                $n->setTitulo($pesquisa);
                $noticias = $n->pesquisa();

            }else{
                echo"<script> alert('Porfavor, preencha o campo!') </script>";
                $noticias = $n->selectNoticias();
            }
        
        // caso não exita o get busca retorna todas as noticias do banco de dados
        }else{
            $noticias = $n->selectNoticias();
        }
    

