<?php
require('./model/BackendManager.php');

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
    $addPost = new BackendManager();
    $editPost = $addPost -> newPost($title, $image, $description, $content);

    if ($editPost === false) {
        die("Impossible d'ajouter l'article!");
    }
    else {
        header('Location: index.php');
    }
}

function isAdminUser ($login, $mdp){
    $adminLogin = new BackendManager();
    $adminUser = $adminLogin -> getAdminUser(1);
    $isPasswordCorrect = password_verify($mdp, $adminUser['motdepasse']);
    if($isPasswordCorrect == true && $login==$adminUser['identifiant']){
        return true; 
    }else{
        return false;
    }
}

function allComments()
{
    $getFirstComments = new BackendManager();
    $firstComments = $getFirstComments -> getFirstComments();

    $getAllComments = new BackendManager();
    $allComments = $getAllComments -> getAllComments();

    $getSignalComments = new BackendManager();
    $commentsSignal = $getSignalComments -> getSignalComments();

    $getNumberSignal = new BackendManager();
    $numberSignal = $getNumberSignal -> getSignalNumber();

    require('./view/backend/listCommentsView.php');
}

function adminPosts()
{
    $getAdminPosts = new BackendManager();
    $adminPosts = $getAdminPosts -> getAdminPosts();
    require('./view/backend/listPostsAdmin.php');
}

function commentSignal()
{
    $functionSignal = new BackendManager();
    $commentSignal = $functionSignal -> signalComment();
}

function commentRemove()
{
    $functionRemoveComment = new BackendManager();
    $commentRemove = $functionRemoveComment -> removeComment();
    header('Location: /index.php?action=listComment');
}

function postRemove()
{
    $functionRemovePost = new BackendManager();
    $postRemove = $functionRemovePost -> removePost();
    header('Location: /index.php?action=adminPosts');
}

function customPost()
{
    $functionCustomPost = new BackendManager();
    $post = $functionCustomPost -> getUpdatePost();
    require('./view/backend/customPost.php');
}

function postModif()
{
    $functionModifPost = new BackendManager();
    $postModif = $functionModifPost -> modifPost();
    header('Location: /index.php?action=adminPosts');
}