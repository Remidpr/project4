<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Gestion des commentaires</title>
    </head>
    <body>
        <header id="header">
            <h2 class="mainTitleEdit">Gestion des commentaires</h2>
        </header>
        <div class="bodyComment">
            <ul class="collapsible menuComment popout">
                <li>
                    <div class="collapsible-header"><i class="material-icons authorComment">announcement</i><span class="authorComment">Commentaires signalés</span><span class="new badge" data-badge-caption="en attente">4</span></div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons authorComment">message</i><span class="authorComment">Tous les commentaires</span></div>
                    <div class="collapsible-body">
                        <?php
                            while ($allCommentaire = $allComments->fetch())
                            {
                        ?>
                            <ul class="collection listComment">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">face</i>
                                    <p><span class="title authorComment"><?php echo $allCommentaire['auteur']; ?></span> - <span class="dateComment"><?php echo $allCommentaire['date_commentaire']; ?></span></p>
                                    <p class="message"><?php echo $allCommentaire['commentaire']; ?></p>
                                    <a class='dropdown-trigger secondary-content' data-target='dropdown1' href="#!"><i class="material-icons more">more</i></a>
                                </li>
                            </ul>
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Modifier</a></li>
                                <li><a href="#!">Supprimer</a></li>
                            </ul>
                        <?php
                            }
                        ?>
                    </div>
                </li>
                <li class="active">
                    <div class="collapsible-header select"><i class="material-icons authorComment">forum</i><span class="authorComment">Les derniers commentaires</span></div>
                    <div class="collapsible-body">
                        <?php
                            while ($commentaire = $firstComments->fetch())
                            {
                        ?>
                            <ul class="collection listComment">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">face</i>
                                    <p><span class="title authorComment"><?php echo $commentaire['auteur']; ?></span> - <span class="dateComment"><?php echo $commentaire['date_commentaire']; ?></span></p>
                                    <p class="message"><?php echo $commentaire['commentaire']; ?></p>
                                    <a class='dropdown-trigger secondary-content' data-target='dropdown1' href="#!"><i class="material-icons more">more</i></a>
                                </li>
                            </ul>
                            <ul id='dropdown1' class='dropdown-content'>
                                <li><a href="#!">Modifier</a></li>
                                <li><a href="#!">Supprimer</a></li>
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