<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Gestion des articles</title>
    </head>
    <body>
        <header id="header">
            <h2 class="mainTitleEdit">Gestion des articles</h2>
        </header>
        <div class="bodyComment">
            <ul class="collapsible menuComment popout">
                <li class="active">
                    <div class="collapsible-header select"><i class="material-icons authorComment">message</i><span class="authorComment">Tous les articles</span></div>
                    <div class="collapsible-body bottom">
                        <?php
                            while ($adminPost = $adminPosts->fetch())
                            {
                        ?>
                            <ul class="collection listComment">
                                <li class="collection-item avatar">
                                <i class="material-icons circle"><img src="/public/images/<?php echo $adminPost['img']; ?>" alt="image article" class="miniatureImg"></i>
                                <p><span class="title authorComment"><?php echo $adminPost['titre']; ?></span> - <span class="dateComment"><?php echo $adminPost['date_article']; ?></span></p>
                                <p class="message"><?php echo $adminPost['description_article']; ?></p>
                                <a class='secondary-content' href=""><i class="material-icons more">edit</i></a>
                                <a class='first-content secondary-content' href="index.php?action=removePost&id=<?php echo $adminPost['id'];?>"><i class="material-icons more">delete</i></a>
                                </li>
                            </ul>
                        <?php
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <?php include("view/frontend/footerView.php"); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="../../public/js/comments.js"></script>       
    </body>
</html>