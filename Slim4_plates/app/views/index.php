<!DOCTYPE html>
<html lang="pt-br" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftNouse</title>
    <!-- Estilo da Pagina Web-->
    <link rel="stylesheet" href="./css/web.css">
    <!-- Estilo da Pagina Mobile -->
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="./css/mobile.css">
    <!-- Font Awesome  -->
    <link rel="shortcut icon" href="../../icones/website.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="navbar">
        <div id="navbar_container">
            <h1 class="logo"> SoftNouse </h1>
            <ul id="navbar_hamburguer"><li><i class="fa fa-bars"></i></li></ul>
            <ul id="navbar_items">
                <li><a href="#">Inicio</a></li>
                <li><a href="#clients">Sobre</a></li>
                <li><a href="#gallerry">Galeria</a></li>
            </ul>
        </div>
    </nav>
    
    <?=$this->section('content')?>

    <footer id="footer">
        <p>Copyright 2023 - Todos direitos reservados.</p>
        <p>Feito por SoftNouse</p>
    </footer>
    <script src="./js/main.js"></script>
</body>
</html>