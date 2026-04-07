<?php 
    require_once('config.php');

    $sql = new SQL();
    $usuarios = $sql->dbSelect('SELECT*FROM tb_usuarios ORDER BY desLogin');

    $headers = array();

    foreach($usuarios[0] as $key => $value)
    {
        array_push($headers, ucfirst($key));
    }

    $file = fopen("usuarios.csv", "w+");
    fwrite($file, implode(',', $headers));

    foreach ($usuarios as $row)
    {
        $data = array();

        foreach ($row as $key=>$value)
        {
            array_push($data, $value);
        }// Coluna

        fwrite($file, implode(',', $data)."\r\n");
    }// linha

    fclose($file);

    //print_r($headers);
    echo implode(',', $headers);
?>