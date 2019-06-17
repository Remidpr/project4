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
            if (isset($_GET['idCommentSignal']) && $_GET['idCommentSignal'] > 0) {
                commentSignal();
            }
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
            if (isAdminUser($_POST['userlogin'],$_POST['mot_de_passe'])){
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
    elseif ($_GET['action'] == 'listComment') {
        allComments();   
    }
    elseif ($_GET['action'] == 'removeComment') {
        commentRemove();   
    }
    elseif ($_GET['action'] == 'removePost') {
        postRemove();   
    }
    elseif ($_GET['action'] == 'adminPosts') {
        adminPosts();
    }
    elseif ($_GET['action'] == 'customPost') {
        customPost();
    }
    elseif ($_GET['action'] == 'postModif') {
        if (!empty($_POST['postTitle']) && !empty($_POST['postContent']) && !empty($_POST['postDescription']) && !empty($_POST['postImg'])) {
            postModif();
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
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