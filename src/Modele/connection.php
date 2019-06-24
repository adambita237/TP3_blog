<?php
$dns = 'mysql:host=localhost;dbname=bdtp3;port=3306;charset=utf8';
$bdd = new PDO ($dns,'root','');
try
{
    // connection to the database
    $bdd = new PDO ($dns, 'root','');
}

catch(Exception $e)
{
    // In case of error, we display a message and we stop the process
    die('Erreur : ' . $e->getMessage());
}
