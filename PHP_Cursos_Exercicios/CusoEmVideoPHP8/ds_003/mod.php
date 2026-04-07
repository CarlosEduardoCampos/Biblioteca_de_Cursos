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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
            //
            $dados = json_decode(file_get_contents($url),true);
            //
            $dolar = $dados["value"]["0"]["cotacaoCompra"];
            //
            $reais = (float) $_GET["reais"];
            //
            print "<p>Seus R$ $reais equivalem a <strong>US$ " . number_format(($reais / $dolar), 2, ',', '.')."</strong></p>";

            print '<p>*<strong>Cotação de R$ '.number_format($dolar, 2, ',', '.').'</strong> API Banco Cenetral.<a href="https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994" target="_blank" rel="noopener noreferrer">Link</a></p>';
        ?>
        
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>
    </section>
</body>
</html>