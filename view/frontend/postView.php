<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <title> Article</title>
    </head>
    <body>
        <?php include("menuView.php"); ?>
        <div id="bodyArticle">
            <div>
                <img src="../../public/images/glacier.jpg" alt="image article 1" class="image_article1">
            </div>
            <h2 class="article_title"><?php echo $post['titre']; ?></h2>
            <div class="contenuArticle">
                <p class="article_date"><?php echo $post['date']; ?></p>
                <?php echo $post['contenu'];?>
            </div>
            <?php include("commentView.php"); ?>
        </div>
        <?php include("footerView.php"); ?>
        <?php
        $reponse->closeCursor(); // Termine le traitement de la requête 
        ?>
    </body>
</html>