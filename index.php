<?php
require('controller/frontend.php');
require('controller/backend.php');

// accès tous les articles
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'articles') {
        articles();
    }
    // accès article spécifique
    if ($_GET['action'] == 'article') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            article();
        }
        else {
            echo 'Aucun identifiant de billet envoyé';
        }
    }
    // ajout commentaire
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
    // accès espace administrateur
    elseif ($_GET['action'] == 'admin') {   
        if (isset($_POST['mot_de_passe']) && isset($_POST['userlogin'])){
            if ($isPasswordCorrect == true && $_POST['userlogin'] == $mdpHash['identifiant']){
                viewAdmin();
            }
            else {
                echo "<p>Informations d'identification incorrect</p>";
            }
        }else{
            loginAdmin();
        }
    }
    // accès espace edition article
    elseif ($_GET['action'] == 'edit') {
        editPost();
    }
    // ajout article
    elseif ($_GET['action'] == 'addPost') { 
        if (!empty($_POST['postTitle']) && !empty($_POST['postImg']) && !empty($_POST['postDescription']) && !empty($_POST['postContent'])) {
            addPost($_POST['postTitle'], $_POST['postImg'], $_POST['postDescription'], $_POST['postContent']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
    }
}
else {
    articles();
}
?>