<?php
$dir = './img/';

$files = array_diff(scandir($dir), array('..', '.'));
$filesKeys = array_keys($files);

//функция работает с одной картинкой для возможности ее использовать для большей гибкости
function getSmallPicture($fullname, $dir){
    if(is_dir($dir)&&file_exists($dir)){ // проверим существует ли данный каталог и каталог ли это
        $image=$dir.$fullname; //полный путь до картинки

        $info = new SplFileInfo($image);

        //на выводе одна картинка будет пропущена по размеру
        //пропущена gif по типу
        if (($info->getExtension() == "jpg" || $info->getExtension() == "jpeg" || $info->getExtension() == "png") && filesize($image) < 500000){
            echo '<div class="small-image"><img src="' . $image . '" alt="Panda!" class="small-image_img"></div>';
        }
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
        <?php
            foreach ($filesKeys as $key) {
                getSmallPicture($files[$key], $dir);
            }
        ?>
    </div>
    <form action="#" class="upload_form">
        <input type="file">
        <button type="submit">Upload!</button>
    </form>
</main>
<footer class="footer"><h3>footer</h3></footer>

<!--    modal-->
<div class="modal hidden" id="modal">
    <i class="fa fa-arrow-left btn-left" aria-hidden="true"></i>
    <i class="fa fa-arrow-right btn-right" aria-hidden="true"></i>
    <img src="img/panda1.jpg" alt="" class="big-image_img">
    <button class="btn-close"><i class="fa fa-times close" aria-hidden="true"></i></button>
</div>
<script src="js/script.js"></script>
</body>
</html>