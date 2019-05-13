<!DOCTYPE html>
<html lang="fr">
    <head> 
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset=utf-8>
        <title>Edition Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3mx6hlqsc4beilueuautalvz6c4lw57rdiskwqjsjaaqucqd"></script>
    </head>
    <body>
        <header id="header">
            <h2 class="mainTitleEdit">Rédaction article</h2>
        </header>
        <div class="containerEdit">
            <form class="formEdit" method="post">
                <div>
                    <textarea id="titlePost" required>Titre de l'article</textarea>
                </div>
                <div class="formImgPost">
                    <label for="imgPost">Sélectionner une image à mettre en avant pour l'article :</label>
                    <input type="file" name="postImg" id="imgPost" required/>
                </div>
                <div>
                    <textarea class="descriptionPost">Courte description de l'article limité à 255 caractères.</textarea>
                </div>
                <div>
                    <textarea id="mytextarea">Rédigeais votre article ici.</textarea>
                </div>
                <div>
                    <input type="submit" value="Publier article" class="submitEdit">
                </div>
            </form>
            <?php include("../../frontend/footerView.php"); ?>
            <script type="text/javascript" src="../../public/js/script.js"></script>
        </div>
    </body>
</html>