<?php
    require_once "app/Controllers/IndexController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php require_once "app/includes/header.php";?>
    <div class="container">
    <?php foreach($noticias as $noticia){?>  
              
        <div class="card">
            <h3><?=$noticia['titulo']?></h3>
            <p>
            <?=$noticia['conteudo']?>
            </p>
            <div class="btn-container">
                <a class="btn-acessar" href="editar-noticia.php?id=<?=$noticia['id']?>">
                    Acessar
                </a>
            </div>
        </div>
        
    <?php } ?>
    </div>
<?php require_once "app/includes/footer.php";?>               
</body>
<script src="assets/js/navbar.js"></script>
</html>