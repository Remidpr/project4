<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Espace d'administration</title>
    </head>
    <body>
        <?php
            if (isset($_POST['mot_de_passe']) AND isset($_POST['userlogin']) AND $_POST['mot_de_passe'] ==  "Forteroche"  AND $_POST['userlogin'] ==  "Jean") // Si le mot de passe est bon
            {
            // On affiche la page
        ?>
        <h1>Espace d'administration</h1>
        <?php
            }
            else // Sinon, on affiche un message d'erreur
            {
            echo "<p>Informations d'identification incorrect</p>";
            }
        ?>
    </body>
</html>