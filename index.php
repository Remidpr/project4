<!DOCTYPE html>
<html lang="fr">
    <head> 
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <meta charset=utf-8>
        <meta name=description content="Un nouvelle épisode chaque semaine !"/>
        <title>Billet simple pour l'Alaska</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    </head>
    <body>
        <?php include("menu.php"); ?>
        <!--Section 1-->
        <section id="accueil">
            <div class="container_accueil">
                <h1 class="main_title">Billet simple pour l'Alaska.</h1>
                <button class="main_button">Commencer à lire</button>
                <img src="./images/alaska.jpg" alt="Montagne Alaska" class="image_accueil"/>
                <div class="banner">
                    <div class="banner_part1">
                        <a href="" class="select_page">Accueil</a>
                    </div>
                    <div class="banner_part2">
                        <a href="" class="publication">Prochaine publication le 7 Mai 2019.</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Section 2-->
        <section id="articles">
            <div class="container_articles">
                <div class="feed">
                    <article>
                        <h3 class="title_article">Billet n°1 - Le commencement</h3>
                        <p class="date">8 Avril 2019</p>
                        <img src="./images/glacier.jpg" alt="image article 1" class="image_article">
                        <p class="description_article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, eius iste? Minima voluptate inventore ea corrupti cumque quas dolorum, consequatur facere earum exercitationem vitae, vero esse quos explicabo. Magnam, facilis...</p>
                        <a href="article1.php" class="read_more">Lire la suite
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="separator"></div>
                    </article>
                    <article>
                        <h3 class="title_article">Billet n°2 - Un allé simple </h3>
                        <p class="date">15 Avril 2019</p>
                        <img src="./images/alaska1.jpg" alt="image article 2" class="image_article">
                        <p class="description_article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, eius iste? Minima voluptate inventore ea corrupti cumque quas dolorum, consequatur facere earum exercitationem vitae, vero esse quos explicabo. Magnam, facilis...</p>
                        <a href="article2.php" class="read_more">Lire la suite
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="separator"></div>
                    </article>
                    <article>
                        <h3 class="title_article">Billet n°3 - Souffle d'hiver</h3>
                        <p class="date">26 Avril 2019</p>
                        <img src="./images/mountain.jpg" alt="image article 3" class="image_article">
                        <p class="description_article">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, eius iste? Minima voluptate inventore ea corrupti cumque quas dolorum, consequatur facere earum exercitationem vitae, vero esse quos explicabo. Magnam, facilis...</p>
                        <a href="article3.php" class="read_more">Lire la suite
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <div class="separator"></div>
                    </article>
                </div>
            <div>
        </section>
        <?php include("footer.php"); ?>
    </body>
<html>