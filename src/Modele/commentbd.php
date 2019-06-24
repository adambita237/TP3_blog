<?php
//connection to the database
require_once('connection.php');

// Retrieving comments from the comments table
function recupComment(\PDO $bdd, $id): array
{
    $query = $bdd->prepare('SELECT author, content, comment_date FROM comments WHERE id_post = :id ORDER BY comment_date');
    //$query = $bdd->prepare('SELECT author, content, comment_date FROM comments');
    $query->execute(['id'=>$id]);
    return $query->fetchAll();
}
