<?php 
    header("Content-type: image/jpeg");

    $file = "wallpaper.jpg";

    $new_with = 256;
    $new_height = 256;

    $data = (getimagesize($file));

    /*
    $with = $data[0];
    $height = $data[1];
    */

    list($old_width, $old_height) = getimagesize($file);

    $new_image = imagecreatetruecolor($new_with, $new_height);
    $old_image = imagecreatefromjpeg($file);

    imagecopyresampled(
        $new_image, // Imagem Real
        $old_image, // Imagem minimizada
        0, // X imagem minimizada
        0, // Y imagem minimizada
        0, // X imagem Real
        0, // Y imagem Real
        $new_with, // Altura imagem Real
        $new_height, // Largura imagem Real
        $old_width, // Altura imagem minimizada
        $old_height // Largura imagem minimizada
    );

    imagejpeg($new_image);
    imagedestroy($old_image)
?>