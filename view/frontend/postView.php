<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <title> Article</title>
    </head>
    <body>
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', 'root',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
            // Si tout va bien, on peut continuer

            // On récupère tout le contenu de la table articles
            $reponse = $bdd->prepare('SELECT * FROM articles WHERE id=?');
            $reponse->execute(array($_GET['id']));

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
        ?>
        <?php include("menuView.php"); ?>
        <div id="bodyArticle">
            <div>
                <img src="../../public/images/glacier.jpg" alt="image article 1" class="image_article1">
            </div>
            <h2 class="article_title"><?php echo $donnees['titre']; ?></h2>
            <div class="contenuArticle">
                <p class="article_date"><?php echo $donnees['date']; ?></p>
                <?php echo $donnees['contenu'];?>
            </div>
            <?php include("commentView.php"); ?>
        </div>
        <?php include("footerView.php"); ?>
        <?php
        }
        $reponse->closeCursor(); // Termine le traitement de la requête 
        ?>
    </body>
</html>