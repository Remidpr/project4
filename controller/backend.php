<?php
require('./model/backend.php');

function loginAdmin()
{
    require('./view/backend/loginView.php');
}

function viewAdmin()
{
    require('./view/backend/adminView.php');
}

function editPost()
{
    require('./view/backend/editView.php');
}

function addPost($title, $image, $description, $content)
{
    $editPost = newPost($title, $image, $description, $content);

    if ($editPost === false) {
        die("Impossible d'ajouter l'article!");
    }
    else {
        header('Location: index.php');
    }
}

function compareMdp()
{   
    $mdpHash = getHashMdp();
    $isPasswordCorrect = password_verify($_POST['mot_de_passe'], $mdpHash['motdepasse']);
}

