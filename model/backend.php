<?php
function newPost($title, $image, $description, $content)
{
    $db = dbConnect();
    $newPost = $db->prepare('INSERT INTO articles(titre, img, description_article, contenu, date_article) VALUES(?, ?, ?, ?, NOW())');
    $editPost = $newPost->execute(array($title, $image, $description, $content));

    return $editPost;
}
?>