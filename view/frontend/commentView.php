<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <title>Commentaire</title>
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
            $comment = $bdd->prepare('SELECT * FROM commentaires WHERE id_billet=?');
            $comment->execute(array($_GET['id']));

            // On affiche chaque entrée une à une
            while ($comments = $comment->fetch())
            {
        ?>
        <form action="" method="post" id="formComment">
            <div class="separator"></div>
            <h3 class="titleComment">Laisser un commentaire</h3>
            <div class="commentPart1">
                <label class="labelComment" for="comment">Commentaire</label>
                <textarea id="comment" required></textarea>
            </div>
            <div class="commentPart2">
                <div class="partName">
                    <label class="labelComment" for="name">Nom</label>
                    <input type="texte" name="inputName" id="name" required/>
                </div>
                <div class="partMail">
                    <label class="labelComment" for="mail">Adresse mail</label>
                    <input type="email" name="inputMail" id="mail" required/>
                </div>
                <input type="submit" value="Laisser un commentaire" class="inputComment" />
            </div>
        </form>
        <div class="partComment">
            <h3 class="titleComment">Commentaire</h3>
            <div class="comments">
                <div class="comment">
                    <div>
                        <p><span class="authorComment"><?php echo $comments['auteur']; ?></span> - <span class="dateComment"><?php echo $comments['date_commentaire']; ?></span></p>
                        <p class="message"><?php echo $comments['commentaire']; ?></p>
                    </div>
                    <div class="buttonComment">
                        <button class="btnComment">Répondre</button>
                        <button class="btnSignal">Signaler</button>
                    </div>
                </div>
                <div class="separator2"></div>
            </div>
        </div>
        <?php
        }
        $reponse->closeCursor(); // Termine le traitement de la requête 
        ?>
    </body>
</html>