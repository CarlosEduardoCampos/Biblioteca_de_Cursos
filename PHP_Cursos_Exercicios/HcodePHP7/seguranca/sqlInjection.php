<?php 
    $id = (isset($_GET[""]))?$_GET['id']:1;

    if (!is_numeric($id) || strlen($id) > 5)
    {
        exit("Pegamos voce");
    }

    $conn = mysqli_connect("localhost", "host", "root", "root", "dpphp7");

    $sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id ";

    $exec = mysqli_query($conn, $sql);

    while ($resultado =mysqli_fetch_object($exec))
    {
        var_dump($resultado);
    }

    // SQL -> OR 1=1 --
?>
