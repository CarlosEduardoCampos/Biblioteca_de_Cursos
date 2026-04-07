<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <h1>Analizandor de Número Real</h1>
        <?php
            $numero = $_GET["numero"];
            //
            print "<p>Analizando o número $numero informado pelo usuário:</p>";
            print "<ul>";
                print "<li>Aparte inteira do número é <strong>" . floor($numero) . "</strong></li>";
                print "<li>Aparte fracionária do número é <strong>" . $numero - (round($numero)) . "</strong></li>";
            print "</ul>";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>