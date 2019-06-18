<?php
class FrontendManager
{
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

    function getBillets()
    {
        $db = $this-> dbConnect();
        // On récupère tout le contenu de la table articles
        $billets = $db->query('SELECT * FROM articles');
        return $billets;
    }

    function getBillet()
    {
        $db = $this-> dbConnect();
        $reponse = $db->prepare('SELECT * FROM articles WHERE id=?');
        $reponse->execute(array($_GET['id']));

        return $reponse->fetch(); 
    }

    function getComments($id_billet)
    {
        $db = $this-> dbConnect();
        // On récupère tout le contenu de la table commentaire associé à l'article
        $comment = $db->prepare('SELECT * FROM Commentaires WHERE id_billet=?');
        $comment->execute(array($id_billet));
        
        return $comment->fetchAll(PDO::FETCH_ASSOC);
    }

    function postComment($id_billet, $auteur, $commentaire)
    {
        $db = $this-> dbConnect();
        $comment = $db->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comment->execute(array($id_billet, $auteur, $commentaire));

        return $affectedLines;
    }
}
?>