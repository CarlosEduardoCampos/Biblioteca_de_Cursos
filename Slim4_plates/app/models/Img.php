<?php
namespace app\models;

class Img
{
    /**
     * Recebe um arquivo eo salva
     */
    public static function Upload($files)
    {
        $arquivo = $files['file'];
        $arquivoNovo = explode('.', $arquivo['name']);

        if($arquivoNovo[sizeof($arquivoNovo)-1] != 'png' && $arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
            die('Você não pode fazer upload deste tipo de arquivo');
        }
        else{
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'uploads'. DIRECTORY_SEPARATOR   ;

            // Verifica se o diretório existe
            if (!is_dir($target_dir))
            {
                // Tenta criar o diretório
                if (mkdir($target_dir, 0777, true))
                {
                    $target_path = $target_dir .basename($arquivo['name']);
                    move_uploaded_file($arquivo['tmp_name'], $target_path);
                }
            }
            else {
                $target_path = $target_dir .basename($arquivo['name']);
                move_uploaded_file($arquivo['tmp_name'], $target_path);
            }
        }
    }
    // Elimina o arquivo do servidor:
    public static function Delete($arquivo){
        $target_path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .'uploads'. DIRECTORY_SEPARATOR . $arquivo  ;
        if (file_exists($target_path))
        {
            if (unlink($target_path))
            {
                return true;
            }
            else {
                return false;
            }
        }
    }
}
?>