autoloads.php
<?php
	// Pucha todas as class da pasta atual para esse arquivo
	function nestaPasta()
	{
		
	}

	// Pucha todas as class da pasta anterior para esse arquivo
	function anteriorPasta()
	{
		
	}

	function str_posteriorPasta($nomePasta)
	{
		
	}
	
	function str_SRC_Pasta($SRC_Pasta)
	{
		spl_autoload_register($SRC_Pasta);
	}
?>