<?php 
    $diaSemana = date("w");

    switch ($diaSemana) {
        case 0:
            print "Domingo";
        break;

        case 1:
            print "Segunda";
        break;

        case 2:
            print "Terça";
        break;

        case 3:
            print "Quarta";
        break;

        case 4:
            print "Quinta";
        break;

        case 5:
            print "Sexta";
        break;

        case 6:
            print "Sábado";
        break;
        
        default:
            print "Data inválida";
        break;
    }
?>