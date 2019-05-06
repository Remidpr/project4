<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../public/css/style.css"/>
        <meta charset="utf-8" />
        <title> Espace d'administration</title>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=3mx6hlqsc4beilueuautalvz6c4lw57rdiskwqjsjaaqucqd"></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    </head>
    <body>
        <?php
            if (isset($_POST['mot_de_passe']) AND isset($_POST['userlogin']) AND $_POST['mot_de_passe'] ==  "Forteroche"  AND $_POST['userlogin'] ==  "Jean") // Si le mot de passe est bon
            {
            // On affiche la page
        ?>
        <h1>Espace d'administration</h1>
        <form method="post">
            <textarea id="mytextarea">Hello, World!</textarea>
        </form>
        <?php
            }
            else // Sinon, on affiche un message d'erreur
            {
            echo "<p>Informations d'identification incorrect</p>";
            }
        ?>
    </body>
</html>