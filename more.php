<?php
require_once 'vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);
include("db.php");
$page = $_POST['page'];
$result = mysqli_query($link, "SELECT * FROM `img` LIMIT 12,$page");
if(!$result){
    die(mysqli_error($link));
}
while($row = mysqli_fetch_assoc($result)){
    $link = 'index.php?id=';
    echo $twig->render('allimages.tmpl', ['images' => $row['url'] , 'link' => $link.$row['id']]);
}

?>