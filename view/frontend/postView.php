<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Article</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    </head>
    <body>
        <?php include("menuView.php"); ?>
        <div id="bodyArticle">
            <div>
                <img src="../../public/images/<?php echo $post['img']; ?>" alt="image article 1" class="image_article1">
            </div>
            <h2 class="article_title"><?php echo $post['titre']; ?></h2>
            <div class="contenuArticle">
                <p class="article_date"><?php echo $post['date_article']; ?></p>
                <?php echo $post['contenu'];?>
            </div>
            <?php 
                comments($post['id']);
            ?>
        </div>
        <?php include("footerView.php"); ?>
        <?php
        //$reponse->closeCursor(); // Termine le traitement de la requête 
        ?>
    </body>
</html>