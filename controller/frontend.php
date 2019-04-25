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
    //echo var_dump($posts);
    require('./view/frontend/listPostsView.php');
}

function comments($postId)
{
    $comments = getComments($postId);
    require('./view/frontend/commentView.php');
}

?>