<?php
$dir = './img/';

$files = array_diff(scandir($dir), array('..', '.'));
$filesKeys = array_keys($files);
function getSmallPicture($fullname, $dir){
    if(is_dir($dir)&&file_exists($dir)){ // проверим существует ли данный каталог и каталог ли это
        $image=$dir.$fullname; //полный путь до картинки
        echo '<img src="'.$image.'" alt="item" class="gallery-pic_small_img">';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header"><h1>header</h1></header>
<main class="main">
    <h1>Gallery</h1>
    <div class="gallery" id="gallery">
        <div class="small-image"><img src="img/panda1.jpg" alt="Panda!" class="small-image_img"></div>
        <div class="small-image"><img src="img/panda2.jpg" alt="Panda!" class="small-image_img"></div>
        <div class="small-image"><img src="img/panda3.jpg" alt="Panda!" class="small-image_img"></div>
        <div class="small-image"><img src="img/panda4.jpg" alt="Panda!" class="small-image_img"></div>
        <div class="small-image"><img src="img/panda5.jpg" alt="Panda!" class="small-image_img"></div>
    </div>
</main>
<footer class="footer"><h3>footer</h3></footer>

<!--    modal-->
<div class="modal">
    <i class="fa fa-arrow-left btn-left" aria-hidden="true"></i>
    <i class="fa fa-arrow-right btn-right" aria-hidden="true"></i>
    <img src="img/panda1.jpg" alt="">
    <button class="btn-close"><i class="fa fa-times close" aria-hidden="true"></i></button>
</div>
<script src="js/script.js"></script>
</body>
</html>