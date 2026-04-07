<?php 
    function view(string $view, array $data = [])
    {
        // Pasta dos aquivos
        $path = dirname(__FILE__,2).DIRECTORY_SEPARATOR.'views';

        $templates = new \League\Plates\Engine($path);
        
        // Reder Template
        echo $templates->render($view, $data);
    }
    function viewAdmin(string $view, array $data = [])
    {
        // Pasta dos aquivos
        $path = dirname(__FILE__,2).DIRECTORY_SEPARATOR.'views/gerencia';

        $templates = new \League\Plates\Engine($path);
        
        // Reder Template
        echo $templates->render($view, $data);
    }
?>