<?php
require('./model/FrontendManager.php');

function article()
{
    $onePost = new FrontendManager();
    $post = $onePost -> getBillet();
    require('./view/frontend/postView.php');
}

function articles()
{
    $postList = new FrontendManager();
    $posts = $postList -> getBillets();
    require('./view/frontend/listPostsView.php');
}

function comments($postId)
{
    $commentsList = new FrontendManager();
    $comments = $commentsList -> getComments($postId);
    require('./view/frontend/commentView.php');
}

function addComment($id_billet, $auteur, $commentaire)
{
    $addComment = new FrontendManager();
    $affectedLines = $addComment -> postComment($id_billet, $auteur, $commentaire);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=article&id=' . $id_billet);
    }
}

?>