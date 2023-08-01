<?php

function contaVocali($parola) {
    $contatore = 0;
    $vocali = array('a', 'e', 'i', 'o', 'u');

    for ($i = 0; $i < strlen($parola); $i++) {
        $lettera = strtolower($parola[$i]);
        if (in_array($lettera, $vocali)) {
            $contatore++;
        }
    }

    return $contatore;
}

$parola = readline("Inserisci una parola: ");
$vocaliTotali = contaVocali($parola);
echo "Nella parola \"$parola\" ci sono $vocaliTotali vocali. \n";
