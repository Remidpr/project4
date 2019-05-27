<?php
function newPost($title, $image, $description, $content)
{
    $db = dbConnect();
    $newPost = $db->prepare('INSERT INTO articles(titre, img, description_article, contenu, date_article) VALUES(?, ?, ?, ?, NOW())');
    $editPost = $newPost->execute(array($title, $image, $description, $content));

    return $editPost;
}
?>

<?php
function getAdminUser($idAdmin)
{
    $db = dbConnect();
    $adminMdp = $db->prepare('SELECT * FROM Membres where id=?');
    $adminMdp->execute(array($idAdmin));
    return $adminMdp->fetch();
}
?>

<?php
function getAllComments()
{
    $db = dbConnect();
    $comments = $db->query('SELECT * FROM commentaires');
    return $comments;
}
?>
