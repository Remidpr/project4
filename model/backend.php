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


<?php
function signalComment()
{
    $db = dbConnect();
    $signalComment = $db->prepare('UPDATE commentaires SET signalement = "1" WHERE id=?');
    $signalComment->execute(array($_GET['idCommentSignal']));
    return $signalComment;
}
?>

<?php
function getSignalComments()
{
    $db = dbConnect();
    $signalComments = $db->query('SELECT * FROM commentaires WHERE signalement = "1"');
    return $signalComments;
}
?>

<?php
function getSignalNumber()
{
    $db = dbConnect();
    $signalNumber = $db->query('SELECT COUNT(signalement) FROM commentaires WHERE signalement > "0"');
    return $signalNumber->fetchColumn();
}
?>

<?php
function removeComment()
{
    $db = dbConnect();
    $removeComment = $db->prepare('DELETE FROM commentaires WHERE id=?');
    $removeComment->execute(array($_GET['id']));
    return $removeComment;
}
?>

<?php
function removePost()
{
    $db = dbConnect();
    $removePost = $db->prepare('DELETE FROM articles WHERE id=?');
    $removePost->execute(array($_GET['id']));
    return $removePost;
}


function getUpdatePost()
{
    $db = dbConnect();
    $reponse = $db->prepare('SELECT * FROM articles WHERE id=?');
    $reponse->execute(array($_GET['id']));

    return $reponse->fetch(); 
}
?>

<?php
function modifPost()
{
    $db = dbConnect();
    $modifPost = $db->prepare('UPDATE articles SET titre = ?, contenu = ?, description_article = ?, img = ? WHERE id = ?');
    $modifPost->execute(array($_POST['postTitle'], $_POST['postContent'], $_POST['postDescription'], $_POST['postImg'], $_GET['id']));
    return $modifPost;
}
?>
