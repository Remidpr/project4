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
function getFirstComments()
{
    $db = dbConnect();
    $firstComment = $db->query('SELECT * FROM commentaires ORDER BY date_commentaire DESC LIMIT 0, 5');
    return $firstComment;
}
?>

<?php
function getAllComments()
{
    $db = dbConnect();
    $allComments = $db->query('SELECT * FROM commentaires');
    
    return $allComments;
}
?>

<?php
function getAdminPosts()
{
    $db = dbConnect();
    // On récupère tout le contenu de la table articles
    $allPosts = $db->query('SELECT * FROM articles');
    return $allPosts;
}
?>