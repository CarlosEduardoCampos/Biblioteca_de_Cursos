<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <h1>Conversor de Moedasv1.0</h1>
        <?php
            const DOLAR = 5.222;
            $reais = (float) $_GET["reais"];

            print '<p>Seus R$' . number_format($reais,2, ',', '.') . ' equivalem a <strong>US$ '. number_format($reais / DOLAR, 2, ',', '.') .'</strong></p>';

            /*// Formatação de moeda com internacionalização!
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            //
            print '<p>Seus ' . numfmt_format_currency($padrão, $reais, "BRL") . ' equivalem a <strong> '.  numfmt_format_currency($padrão, ($reais / DOLAR) , "USD") .'</strong></p>';*/
        ?>
        <p>*<strong>Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>