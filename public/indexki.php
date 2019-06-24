<?php
require_once ('../src/Modele/postbd.php');
require_once '../vendor/autoload.php';
$posts= findAll($bdd);
/*var_dump($posts);
die();*/

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('home.html.twig', ['posts'=>$posts]);