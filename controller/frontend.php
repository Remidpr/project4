<?php
require('./model/frontend.php');

function article()
{
    $post = getBillet();
    require('./view/frontend/postView.php');
}

function articles()
{
    $posts = getBillets();
    require('./view/frontend/listPostsView.php');
}

function comments($postId)
{
    $comments = getComments($postId);
    require('./view/frontend/commentView.php');
}

function addComment($id_billet, $auteur, $commentaire)
{
    $affectedLines = postComment($id_billet, $auteur, $commentaire);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=article&id=' . $id_billet);
    }
}

?>