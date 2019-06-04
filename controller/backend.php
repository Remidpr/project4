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

function isAdminUser ($login, $mdp){
    $adminUser = getAdminUser(1);
    $isPasswordCorrect = password_verify($mdp, $adminUser['motdepasse']);
    if($isPasswordCorrect == true && $login==$adminUser['identifiant']){
        return true; 
    }else{
        return false;
    }
}

function allComments()
{
    $firstComments = getFirstComments();
    $allComments = getAllComments();
    require('./view/backend/listCommentsView.php');
}

function adminPosts()
{
    $adminPosts = getAdminPosts();
    require('./view/backend/listPostsAdmin.php');
}