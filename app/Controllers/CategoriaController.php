<?php

require_once "app/Models/Categoria.php";

//verifica se o post titulo existe
if(isset($_POST['titulo'])){

    $nome = $_POST['titulo'];
    //se não estiver vazio
    if(!empty($nome)){

        $categoria = new Categoria();
        //cadastra a categoria
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
