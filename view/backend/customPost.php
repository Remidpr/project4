<!DOCTYPE html>
<html lang="fr">
    <head> 
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset=utf-8>
        <title>Modification Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3mx6hlqsc4beilueuautalvz6c4lw57rdiskwqjsjaaqucqd"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header id="header">
            <h2 class="mainTitleEdit">Modification article</h2>
        </header>
        <div class="containerEdit">
            <form action="index.php?action=addPost" class="formEdit" method="post">
                <div>
                    <textarea id="titlePost" name="postTitle" required><?php echo $adminPost['titre']; ?></textarea>
                </div>
                <div class="formImgPost">
                    <input type="file" name="postImg" id="imgPost" required/>
                </div>
                <div>
                    <textarea class="descriptionPost" name="postDescription"></textarea>
                </div>
                <div>
                    <textarea id="mytextarea" name="postContent"></textarea>
                </div>
                <div>
                    <button type="submit" class="submitEdit waves-effect waves-light btn" >Modifier article
                        <i class="material-icons right white-text">send</i>
                    </button>
                </div>
            </form>
            <script type="text/javascript" src="../../public/js/editPost.js"></script>
        </div>
        <?php include("view/frontend/footerView.php"); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>