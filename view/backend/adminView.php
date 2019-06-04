<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <title> Espace d'administration</title>
    </head>
    <body class="bodyAdmin">
        <header id="header">
            <h2 class="mainTitleEdit">Espace d'administration</h2>
        </header>
        <div class="containerAdmin">
                <ul class="collection with-header">
                    <li class="collection-header"><h4 class="menuAdmin">Menu administration</h4></li>
                    <li class="collection-item itemMenu"><a class="itemMenu" href="index.php?action=edit">Créer un nouvel article</a></li>
                    <li class="collection-item itemMenu"><a class="itemMenu" href="index.php?action=listComment">Gestion commentaires</a></li>
                    <li class="collection-item itemMenu"><a class="itemMenu" href="index.php?action=adminPosts">Gestion articles</a></li>
                    <li class="collection-item itemMenu"><a class="itemMenu" href="#!">Préférences</a></li>
                    <li class="collection-item itemMenu"><a class="itemMenu" href="#!">Paramètres</a></li>
                </ul>
        </div>
        <?php include("view/frontend/footerView.php"); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>