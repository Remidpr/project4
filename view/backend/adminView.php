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
            <div class="collection menuAdmin">
                <a href="index.php?action=edit" class="collection-item itemMenu">Créer un nouvel article</a>
                <a href="#!" class="collection-item itemMenu">Gestion commentaires</a>
                <a href="#!" class="collection-item itemMenu">Gestion articles</a>
                <a href="#!" class="collection-item itemMenu">Préférences</a>
                <a href="#!" class="collection-item itemMenu">Paramètres</a>
            </div>
        </div>
        <?php include("view/frontend/footerView.php"); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>