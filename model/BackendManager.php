<?php
class BackendManager
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
    
    function newPost($title, $image, $description, $content)
    {
        $db = $this-> dbConnect();
        $newPost = $db->prepare('INSERT INTO articles(titre, img, description_article, contenu, date_article) VALUES(?, ?, ?, ?, NOW())');
        $editPost = $newPost->execute(array($title, $image, $description, $content));

        return $editPost;
    }

    function getAdminUser($idAdmin)
    {
        $db = $this-> dbConnect();
        $adminMdp = $db->prepare('SELECT * FROM Membres where id=?');
        $adminMdp->execute(array($idAdmin));
        return $adminMdp->fetch();
    }

    function getFirstComments()
    {
        $db = $this-> dbConnect();
        $firstComment = $db->query('SELECT * FROM commentaires ORDER BY date_commentaire DESC LIMIT 0, 5');
        return $firstComment;
    }

    function getAllComments()
    {
        $db = $this-> dbConnect();
        $allComments = $db->query('SELECT * FROM commentaires');
        
        return $allComments;
    }

    function getAdminPosts()
    {
        $db = $this-> dbConnect();
        // On récupère tout le contenu de la table articles
        $allPosts = $db->query('SELECT * FROM articles');
        return $allPosts;
    }

    function signalComment()
    {
        $db = $this-> dbConnect();
        $signalComment = $db->prepare('UPDATE commentaires SET signalement = "1" WHERE id=?');
        $signalComment->execute(array($_GET['idCommentSignal']));
        return $signalComment;
    }

    function getSignalComments()
    {
        $db = $this-> dbConnect();
        $signalComments = $db->query('SELECT * FROM commentaires WHERE signalement = "1"');
        return $signalComments;
    }

    function getSignalNumber()
    {
        $db = $this-> dbConnect();
        $signalNumber = $db->query('SELECT COUNT(signalement) FROM commentaires WHERE signalement > "0"');
        return $signalNumber->fetchColumn();
    }

    function removeComment()
    {
        $db = $this-> dbConnect();
        $removeComment = $db->prepare('DELETE FROM commentaires WHERE id=?');
        $removeComment->execute(array($_GET['id']));
        return $removeComment;
    }

    function removePost()
    {
        $db = $this-> dbConnect();
        $removePost = $db->prepare('DELETE FROM articles WHERE id=?');
        $removePost->execute(array($_GET['id']));
        return $removePost;
    }

    function getUpdatePost()
    {
        $db = $this-> dbConnect();
        $reponse = $db->prepare('SELECT * FROM articles WHERE id=?');
        $reponse->execute(array($_GET['id']));

        return $reponse->fetch(); 
    }

    function modifPost()
    {
        $db = $this-> dbConnect();
        $modifPost = $db->prepare('UPDATE articles SET titre = ?, contenu = ?, description_article = ?, img = ? WHERE id = ?');
        $modifPost->execute(array($_POST['postTitle'], $_POST['postContent'], $_POST['postDescription'], $_POST['postImg'], $_GET['id']));
        return $modifPost;
    }
}
?>
