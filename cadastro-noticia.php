<?php
    require_once "app/Controllers/NoticiaController.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de Notícias</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>
<body>
<?php require_once "app/includes/header.php"?>
    <div class="container">
        <div class="conteudo">
            <h3>Cadastro de Notícias</h3>
            <form method="POST" action="cadastro-noticia.php">
                <input class="input-noticia" type="text" placeholder="Título da notícia" name="titulo">
                <select class="select-categoria" name="categoria">
                    <?php foreach ($categorias as $categoria) {?>
                        <option value="<?= $categoria['id']?>"><?= $categoria['nome']?></option>
                    <?php } ?>                
                </select>
                <textarea class="textarea-noticia"  placeholder="Conteudo da notícia" name="conteudo"></textarea>
                <button id="btn-cadastrar" type="submit">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
<?php require_once "app/includes/footer.php";?> 
</body>
<script src="assets/js/navbar.js"></script>
</html>