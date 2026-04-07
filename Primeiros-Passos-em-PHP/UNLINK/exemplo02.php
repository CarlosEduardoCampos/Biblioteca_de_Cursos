<?php
	if(!is_dir("images"))mkdir("images");//se nao existe images

	foreach (scandir("images") as $item)
	{
		if(!in_array($item, array(".","..")))
		{
			unlink("images/".$item);
		}
	}
	echo "ok";
?>