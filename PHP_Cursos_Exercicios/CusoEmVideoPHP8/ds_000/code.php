<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resutado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php
            $num = $_GET["numero"] ?? 0;
            //
            print "<p>O número escolhido foi <strong>$num</strong></p>";
            print '<p>O seu antecessor é ' . ($num - 1) .'</p>';
            print '<p>O seu sucessor é ' . ($num + 1) . '</p>'; 
        ?>
        <a href="javascript:history.go(-1)"><button>&#x2b05; Voltar</button></a>
    </section>
</body>
</html>