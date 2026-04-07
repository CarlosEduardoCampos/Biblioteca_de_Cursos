

<?php
    // Abre a imagem que sera editada
    $image = imagecreatefromjpeg('certificado.jpg');

    // Cor preta para a font
    $titleColor = imagecolorallocate($image, 0, 0, 0);

    $grey = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 20, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
    imagestring($image, 5, 440, 370, "Cocluído em: ". date('d/m/Y'), $titleColor);

    header("Content-type: image/jpeg");

    imagejpeg($image, "certificado-",date("Y-m-d").'.jpg',10);
    imagedestroy($image);
?>

