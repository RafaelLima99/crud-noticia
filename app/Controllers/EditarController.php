<?php

require_once "app/Models/Noticia.php";

        $noticia = null;
        
        if(isset($_GET['id'])){
            $n = new Noticia();
            $n->setId($_GET['id']);
            $noticia = $n->selectUniNoticia() ;
        }

        if(isset($_POST['titulo']) && isset($_POST['conteudo'])){

            $id       = $_GET['id'];
            $titulo   = $_POST['titulo'];
            $conteudo = $_POST['conteudo'];

            if(!empty($id) && !empty($titulo)  && !empty($conteudo)){
                $n = new Noticia();
                $n->setId($id);
                $n->setTitulo($titulo);
                $n->setConteudo($conteudo);
                $n->atualiza();
                header('Location: index.php');
            }else{
                echo "vazio";
            }

            
            
        }

        if(isset($_GET['id_remove'])){
            echo "remove";
            $n = new Noticia();
            $n->setId($_GET['id_remove']);
            $n->remove();
            header('Location: index.php');
        }
        
