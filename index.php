<?php
require_once 'vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

//Подключение базы данных.
include("db.php");

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $imageID = $_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM `img` WHERE id = $imageID");
    if(!$result){
        die(mysqli_error($link));
    }
    //Достаём из базы путь до картинки.
    $row = mysqli_fetch_assoc($result);
    echo $twig->render('oneimages.tmpl', ['image' => $row['url']]);
}else{
    $result = mysqli_query($link, "SELECT * FROM `img`");
    if(!$result){
        die(mysqli_error($link));
    }
    //Цикл который выведет все картинки.
    while($row = mysqli_fetch_assoc($result)){
        $link = 'index.php?id=';
        echo $twig->render('allimages.tmpl', ['images' => $row['url'] , 'link' => $link.$row['id']]);
    }
}
