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
            <form action="index.php?action=addPost" class="formEdit" method="post">
                <div>
                    <textarea id="titlePost" name="postTitle" required>Titre de l'article</textarea>
                </div>
                <div class="formImgPost">
                    <textarea type="text" name="postImg" id="imgPost" required>Nom de l'image comprenant l'extension (jpg, png...)</textarea>
                </div>
                <div>
                    <textarea class="descriptionPost" name="postDescription">Courte description de l'article limité à 255 caractères.</textarea>
                </div>
                <div>
                    <textarea id="mytextarea" name="postContent">Rédigeais votre article ici.</textarea>
                </div>
                <div>
                    <input type="submit" value="Publier article" class="submitEdit">
                </div>
            </form>
            <script type="text/javascript" src="../../public/js/script.js"></script>
        </div>
        <?php include("view/frontend/footerView.php"); ?>
    </body>
</html>