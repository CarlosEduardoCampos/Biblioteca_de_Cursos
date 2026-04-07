<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            // Diferentes funções de numeros aleatorios:
            // rand($min, $max);    -> 1951 - Linear Congrential Gererator
            // mt_rand($min, $max); -> 1997 - Mersenne Twister
            // random_int($min, $max) gera números aleatórios criptograficamente seguros

            print '<p>Gerando um número aleatório entre 0, 100...</p>';
            print '<p>O valor gerado foi '. mt_rand(0, 100)."</p>";
        ?>
        <a href="javascript:history.go(0)"><button>&#x1f504; Gerar outro</button></a>
    </section>
</body>
</html>