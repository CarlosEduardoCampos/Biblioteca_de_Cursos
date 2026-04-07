<?php 
    $images = scandir("images");
    $data = array();

    //var_dump($images);

    # Percorre os arquivos que estão dentro da pasta:
    foreach ($images as $img)
    {
        # Se $img != . || $img != ..:
        if (!in_array($img, array('.','..')))
        {
            # Caminho do arquivo:
            $filename = 'images'. DIRECTORY_SEPARATOR . $img;

            # Informações do arquivo:
            $info = pathinfo($filename);

            # Tamanho do arquivo em bits
            $info['size'] = filesize($filename);

            # Data e hora que o arquivo foimodificado:
            $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));

            # URL do arquivo:
            $info['url'] = 'http://127.0.0.1/PHP_Cursos_Exercicios/HcodePHP7/DIR/'.str_replace('\\', '/', $filename);

            array_push($data, $info);
        }
    }

    echo json_encode($data);
?>