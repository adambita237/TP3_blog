<?php
require_once ('../Modele/postbd.php');
require_once ('../Modele/commentbd.php');
require_once '../../vendor/autoload.php';
$posts= findAll($bdd);
/*var_dump($_GET['post']);
die();*/

$post = postById($bdd, $_GET['post'] );
/*var_dump($posts);
die();*/
$comments = recupComment($bdd, $post['id']);
/*var_dump($comments);
die();*/
$loader = new \Twig\Loader\FilesystemLoader('../../views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('comment.html.twig', ['post'=>$posts, 'comments'=>$comments]);