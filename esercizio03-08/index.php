<?php
while (true) {
    echo "\n";
    echo "\033[0;35mScegli un esercizio da eseguire:\033[0m \n";
    echo "\n";
    echo "\033[0;33m1. Esercizio 1 \033[0m \n";
    echo "\033[0;33m2. Esercizio 2 \033[0m \n" ;
    echo "\033[0;33m2. Esercizio 3 \033[0m \n" ;
    echo "0. Esci \n" ;

    $scelta = readline();

    if ($scelta === '1') {
        echo "\033c";
        include('esercizio1.php');
    } elseif ($scelta === '2') {
        echo "\033c";
        include('esercizio2.php');
    } elseif ($scelta === '3') {
        echo "\033c";
        include('esercizio3.php');
    }elseif($scelta === '0'){
        echo "\033c";
        echo "\n";
        echo "\033[0;33mArrivederci! \033[0m \n";
        echo "\n";
        break;
    }else {
        echo "Scelta non valida. Riprova. \n";
    }

    echo "Vuoi eseguire un altro esercizio? (s/n): ";
    $risposta = readline();
    if (strtolower($risposta) !== 's') {
        echo "\033c";
        echo "\n";
        echo "\033[0;33mArrivederci! \033[0m \n";
        echo "\n";
        break;
    }else{
        echo "\033c";
    }
}