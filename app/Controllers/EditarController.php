<?php

require_once "app/Models/Noticia.php";

$noticia = null;

//verifica se existe o get id
if(isset($_GET['id'])){
    $n = new Noticia();
    $n->setId($_GET['id']);
    $noticia = $n->selectUniNoticia();
}

//verifica se existe os post titulo e conteudo
if(isset($_POST['titulo']) && isset($_POST['conteudo'])){

    $id       = $_GET['id'];
    $titulo   = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    //se os post não estiverem vazios
    if(!empty($id) && !empty($titulo)  && !empty($conteudo)){
        $n = new Noticia();
        $n->setId($id);
        $n->setTitulo($titulo);
        $n->setConteudo($conteudo);
        //atualiza os dados da notítica
        $n->atualiza();
        header('Location: index.php');
        }else{
        echo "vazio";
        }
    }

//verifica se o get id_remove exite
if(isset($_GET['id_remove'])){
    $n = new Noticia();
    $n->setId($_GET['id_remove']);
    //remove a notícia
    $n->remove();
    header('Location: index.php');
}
