<?php

require_once "app/Models/Categoria.php";

if(isset($_POST['titulo'])){

    $nome = $_POST['titulo'];
    if(!empty($nome)){

        $categoria = new Categoria();
        $categoria->setNome($nome);

        if($categoria->cadastra()){
            echo "<script>alert('cadastrado com sucesso')</script>";
        }else{
            echo "<script>alert('Erro ao cadastrar')</script>";
        }

    }else{
        echo "<script>alert('Por favor, preencha o campo!')</script>";
    }
}