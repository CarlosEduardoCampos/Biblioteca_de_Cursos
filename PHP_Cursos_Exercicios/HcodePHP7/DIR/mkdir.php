<?php 
    $name = "images";

    # Testa se existe uma pasta com o nome $name:
    $existeDiretorio = is_dir($name);

    # Se (não existe):
    if(!$existeDiretorio)
    {
        # Cria a pasta(Diretório):
        mkdir($name);
        echo "diretório $name criado com sucesso!";
    }
    # Se (sim existe):
    else{
        # Deleta o diretorio
        rmdir($name);
        echo "Já existe o diretório: $name";
    }
?>