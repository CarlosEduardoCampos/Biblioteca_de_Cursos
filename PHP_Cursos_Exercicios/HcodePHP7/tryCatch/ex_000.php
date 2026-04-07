<?php 
    try {# tenta executar
        # forço um erro
        throw new Exception("Houve um erro", 400);
    }
    catch (Exception $e)
    {# em caso de erro
        # resposta do erro 
        echo json_encode(array(
            'messagem'=>$e->getMessage(),
            'line'=>$e->getLine(),
            'file'=>$e->getFile(),
            'code'=>$e->getcode()
        ));
    }
?>