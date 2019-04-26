<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
?>

<?php
function getBillets()
{
    $db = dbConnect();
    // On récupère tout le contenu de la table articles
    $billets = $db->query('SELECT * FROM articles');
    return $billets;
}
?>

<?php
function getBillet()
{
    $db = dbConnect();
    // On récupère tout le contenu de la table articles
    $reponse = $db->prepare('SELECT * FROM articles WHERE id=?');
    $reponse->execute(array($_GET['id']));

    return $reponse->fetch(); 
}
?>

<?php
function getComments($id_billet)
{
    $db = dbConnect();
    // On récupère tout le contenu de la table articles
    $comment = $db->prepare('SELECT * FROM Commentaires WHERE id_billet=?');
    $comment->execute(array($id_billet));
    
    return $comment->fetchAll(PDO::FETCH_ASSOC);
}
?>

<?php
function postComment($id_billet, $auteur, $commentaire)
{
    $db = dbConnect();
    $comment = $db->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comment->execute(array($id_billet, $auteur, $commentaire));

    return $affectedLines;
}
?>