<?php 
	$image = imagecreate("wallpaper.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100,100);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
	imagestring($image, 5, 440, 350, "DIVANEI APARECIDO", $titleColor);
	imagestring($image, 3, 440, 370, utf8_decode("CONCLUÍDO em: ").date("d/m/Y"), $titleColor);

	header("Content-Type: image/jpeg");

	imagejpeg($image);

	imagedestroy($image);

?>