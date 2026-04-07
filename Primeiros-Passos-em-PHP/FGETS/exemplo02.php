<?php
	$filename = "logo.png";
	$base64 = base64_encode(file_get_contents($filename));// tudo em string
	$fileinfo = new finfo(FILEINFO_MIME_TYPE);//pega o endereço da imagem
	$mimetype = $fileinfo->file($filename);

	$base64encode = "data:". $mimetype .";base64,".$base64;
?>
<a href="<?=$base64encode?>" target="_blank"> LINK PARA IMAGEM </a>

<img src="<?=$base64encode?>">