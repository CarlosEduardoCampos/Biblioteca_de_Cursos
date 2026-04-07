<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = 'Gustavo';
        $sobrenome = 'Guanabara';
        $apelido = 'Gafanhoto';
        //
        print "<h2>Exemplo (Double Quoted)</h2>";
        print "$nome $sobrenome \u{1f596}";
        //
        print "<h2>Exemplo (Single Quoted)</h2>";
        print '$nome $sobrenome \u{1f596}';
        //
        print "<h2>Exemplo Sequencia de Esape( \\ )</h2>";
        print "$nome \"$apelido\" $sobrenome";
    ?>
</body>
</html>