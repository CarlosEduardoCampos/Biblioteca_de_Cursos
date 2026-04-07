<?php
	$link = "https://tpc.googlesyndication.com/simgad/16482164633254105612?";
	$content = file_get_contents($link);//localização de arquivo
	$parse =  parse_url($link);// conteudo da url
	$basename = basename($parse['path']);// Caminho

	$file = fopen($basename, "w+");//abre ou cria arquivo
	fwrite($file, $content);// escreve o conteudo de $content em $file
	fclose($file);//fecha arquivo
?>
<img src="<?=$basename?>">
<a href="<?=$link?>"> Click aqui link </a>