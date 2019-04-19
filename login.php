<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="utf-8" />
        <title> Identification administrateur</title>
    </head>
    <body id="loginBody">
        <p class="info_login">Veuillez vous identifier pour vous connecter à l'interface d'administration :</p>
        <form action="admin.php" method="post" class="formLogin">
            <div class="form_part1">
                <label for="login" class="labelLogin">Identifiant</label>
                <input type="text" name="userlogin" id="login" required/>
            </div>
            <div>
                <label for="pass" class="labelLogin">Mot de passe</label>
                <input type="password" name="mot_de_passe" id="pass" required class="mdp"/>
            </div>
            <div>
                <input type="submit" value="Valider" class="btn_submit" />
            </div>
        </form>
        <p class="info_login">Cette page est réservée au personnel et administrateur du site internet.</p>
    </body>
</html>