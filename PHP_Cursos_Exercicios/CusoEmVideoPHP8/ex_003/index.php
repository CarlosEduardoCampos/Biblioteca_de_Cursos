<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de Variaveis</h1>
    <?php
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        //
        const PAIS = "Brasil";
        //
        $nome = "Rafael";
        $sobrenome = "Silva";
        //
        print "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
        //
    ?>
    <h1> Teste de Tipos Primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 010;
        // print "Ovalor a variável é $num";
        // $v = "Gustavo";
        // var_dump($v);
        // $num = 3e2; // 3 x 10(2)
        // print "O valor é $num";
        // $vet = [6, 2.5, "Maria", 3, False];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
