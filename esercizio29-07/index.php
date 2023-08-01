<?php
require_once 'funzioni.php';

echo "\n";
echo "\033[0;33mSelfworks 003\033[0m \n";
echo "\n";

while (true) {
    echo "\n";
    echo "\033[0;35mScegli un esercizio da eseguire:\033[0m \n";
    echo "\n";
    echo "1. Numeri da 1 a N" . PHP_EOL;
    echo "2. Validazione Password" . PHP_EOL;
    echo "3. Esci" . PHP_EOL;

    $scelta = readline();

    if ($scelta === '1') {
        $numeroDesiderato = leggiNumeroDaConsole();
        stampaNumeriFinoA($numeroDesiderato);
    } elseif ($scelta === '2') {
        $pass = leggiPasswordDaConsole();
    } elseif ($scelta === '3') {
        echo "\n";
        echo "\033[0;33mArrivederci! \033[0m \n";
        echo "\n";
        break;
    } else {
        echo "Scelta non valida. Riprova." . PHP_EOL;
    }

    echo "Vuoi eseguire un altro esercizio? (s/n): ";
    $risposta = readline();
    if (strtolower($risposta) !== 's') {
        echo "\n";
        echo "\033[0;33mArrivederci! \033[0m \n";
        echo "\n";
        break;
    }
}