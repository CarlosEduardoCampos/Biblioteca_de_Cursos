<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php 
	if(isset($_POST['busca']))
	{
		// Impede que usem tags nos capos de busca;
		// echo strip_tags($_POST['busca']);
		echo htmlentitis($_POST['busca']);
	}
?>