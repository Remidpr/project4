<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <title>Commentaire</title>
    </head>
    <body>
        <form action="index.php?action=addComment&id=<?php echo $postId ?>" method="post" id="formComment">
            <div class="separator"></div>
            <h3 class="titleComment">Laisser un commentaire</h3>
            <div class="commentPart1">
                <label class="labelComment" for="comment">Commentaire</label>
                <textarea id="comment" name="inputComment" required></textarea>
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
            <?php                      
                //echo '<pre>';
                //var_dump($comments);
                //echo '</pre>';
                for ($i=0; $i < count($comments); $i++) 
                { //var_dump($comments[0]);  
                ?>
                <div class="comment">
                    <div class="infoComment">
                        <p><span class="authorComment"><?php echo $comments[$i]['auteur']; ?>
                        </span> - <span class="dateComment"><?php echo $comments[$i]['date_commentaire']; ?></span></p>
                        <p class="message"><?php echo $comments[$i]['commentaire']; ?></p> 
                    </div>
                    <div class="buttonComment">
                        <a href="index.php?action=article&id=<?php echo $comments[$i]['id_billet']; ?>&idCommentSignal=<?php echo $comments[$i]['id']; ?>"><button class="btnSignal">Signaler</button></a>
                    </div>
                </div>
                <div class="separator2"></div>
            <?php
            }
            ?>
            </div>
        </div>
        <?php 
        ?>
    </body>
</html>