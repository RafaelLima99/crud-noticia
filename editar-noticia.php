<?php
    require_once "app/Controllers/EditarController.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Notícia</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>
<body>
<?php require_once "app/includes/header.php"?>
    <div class="container">
        <div class="conteudo">
            <h3>Editar Notícia</h3>
            <form method="POST" action="editar-noticia.php?id=<?=$noticia['id']?>" >
                <input class="input-noticia" type="text" placeholder="Título da notícia" name="titulo" value="<?= $noticia['titulo']?>">
                <textarea class="textarea-noticia"  placeholder="Conteudo da notícia" name="conteudo"><?= $noticia['conteudo']?></textarea>
                <div id="btn">
                    <button class="btn-atualizar" type="submit">Atualizar</button> 
                    <a class="btn-remover"href="editar-noticia.php?id_remove=<?=$noticia['id']?>">Remover</a>
                </div>
            </form>
            </div>
        </div>
    </div>
<?php require_once "app/includes/footer.php";?> 
</body>
<script src="assets/js/navbar.js"></script>
</html>