<!DOCTYPE html>
<html lang="fr">
    <head> 
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta charset=utf-8>
        <meta name=description content="Un nouvelle épisode chaque semaine !"/>
        <title>Billet simple pour l'Alaska</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    </head>
    <body>
        <?php include("menuView.php"); ?>
        <!--Section 1-->
        <section id="accueil">
            <div class="container_accueil">
                <h1 class="main_title">Billet simple pour l'Alaska.</h1>
                <button class="main_button">Commencer à lire</button>
                <img src="../../public/images/alaska.jpg" alt="Montagne Alaska" class="image_accueil"/>
                <div class="banner">
                    <div class="banner_part1">
                        <a href="" class="select_page">Accueil</a>
                    </div>
                    <div class="banner_part2">
                        <a href="" class="publication">Prochaine publication le 21 Juin 2019.</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Section 2-->
        <section id="articles">
            <div class="container_articles">
                <div class="feed">
                    <?php
                    while ($post = $posts->fetch())
                    {
                    ?>
                    <article>
                        <h3 class="title_article"><?php echo $post['titre']; ?></h3>
                        <p class="date"><?php echo $post['date_article']; ?></p>
                        <img src="../../public/images/<?php echo $post['img']; ?>" alt="image article" class="image_article">
                        <p class="description_article"><?php echo $post['description_article']; ?></p>
                        <a href="index.php?action=article&id=<?php echo $post['id']; ?>" class="read_more">Lire la suite
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="separator"></div>
                    </article>
                    <?php
                    }
                    ?>
                </div>
            <div>
        </section>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large z-depth-3 pulse">
                <i class="large material-icons">more</i>
            </a>
            <ul>
                <li><a class="btn-floating iconContact"><i class="material-icons">mail</i></a></li>
                <li><a class="btn-floating iconContact"><i class="material-icons">phone</i></a></li>
                <li><a class="btn-floating iconContact"><i class="material-icons">map</i></a></li>
                <li><a class="btn-floating iconContact"><i class="material-icons">search</i></a></li>
            </ul>
        </div>
        <?php include("footerView.php"); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="../../public/js/home.js"></script>
    </body>
<html>