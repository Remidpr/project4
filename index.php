<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'articles') {
        articles();
    }
    if ($_GET['action'] == 'article') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            article();
        }
        else {
            echo 'Aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'addComment') { 
        echo "addComment";
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['inputName']) && !empty($_POST['inputComment'])) {
                addComment($_GET['id'], $_POST['inputName'], $_POST['inputComment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'admin') {
        loginAdmin();
        if (isset($_POST['mot_de_passe']) && isset($_POST['userlogin']) && $_POST['mot_de_passe'] ==  "Forteroche"  && $_POST['userlogin'] ==  "Jean"){
            getAdmin();
        }
        else {
            echo "<p>Informations d'identification incorrect</p>";
        }
    }
}
else {
    articles();
}
?>