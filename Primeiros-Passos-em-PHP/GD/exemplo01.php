<?php
	header("Content-Type: image/png");
	$image = imagecreate(1500, 1500);

	# palheta de cores 1º cor padrão de fundo
	$black = imagecolorallocate($image, 0, 0, 0);
	$red = imagecolorallocate($image, 255, 0, 0);

	imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

	imagepng($image);

	imagedestroy($image);
?>