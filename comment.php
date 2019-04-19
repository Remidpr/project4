<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="utf-8" />
        <title>Commentaire</title>
    </head>
    <body>
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
                        <p><span class="authorComment">Thierry Marquet</span> - <span class="dateComment">11/04/2019 à 15h41</span></p>
                        <p class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A qui, officiis cumque nesciunt ut accusamus molestias voluptatem deleniti! Doloribus quod quia atque amet nam deserunt exercitationem rerum commodi distinctio dolor.</p>
                    </div>
                    <div class="buttonComment">
                        <button class="btnComment">Répondre</button>
                        <button class="btnSignal">Signaler</button>
                    </div>
                </div>
                <div class="separator2"></div>
            </div>
        </div>
    </body>
</html>