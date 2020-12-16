<?php

require_once "app/Models/Categoria.php";

if(isset($_POST['titulo'])){

    $nome = $_POST['titulo'];
    if(!empty($nome)){

        $categoria = new Categoria();
        $categoria->setNome($nome);

        if($categoria->cadastra()){
            echo "cadastrou";
        }else{
            echo "erro";
        }

    }else{
        echo "vazio";
    }
}