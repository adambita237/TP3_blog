<?php
//Connection to the database
require_once('connection.php');

//Show all posts in the posts table
function findAll(\PDO $bdd): array
{
    $query = $bdd->prepare('SELECT id, title, content, creation_date  FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
    $query->execute();
    return $query->fetchAll();
    
}

// Retrieving ticket from the posts table

function postById(\PDO $bdd, int $id): array
{
    $query = $bdd->prepare('SELECT id, title, content, creation_date FROM posts WHERE id =:id');
    $query->execute(['id'=> $id,]);
    return $query->fetch();
}
