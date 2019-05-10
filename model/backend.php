<?php
function newPost($title, $content, $description, $image)
{
    $db = dbConnect();
    $comment = $db->prepare('INSERT INTO articles(titre, contenu, description_article, img, date_article) VALUES(?, ?, ?, ?, NOW())');
    $affectedLines = $comment->execute(array($title, $content, $description, $image));

    return $affectedLines;
}
?>