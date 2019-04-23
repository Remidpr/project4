<?php
function getBillet()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', 'root',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table articles
    $reponse = $bdd->prepare('SELECT * FROM articles WHERE id=?');
    $reponse->execute(array($_GET['id']));

    return $reponse->fetch(); 
}
?>