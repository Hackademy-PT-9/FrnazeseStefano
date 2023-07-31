<?php
echo "\n";
echo "\n";
echo "\033[35m----- Selfworks 002  -----\033[0m";
echo "\n";

mainMenu();

function mainMenu()
{
    echo "\n";
    echo "\033[32m Scegli un'opzione: \033[0m";
    echo "\n";
    echo "1 - Esercizio 1:\033[33m Paga in 3 comode rate\033[0m ";
    echo "\n";
    echo "2 - Esercizio 2:\033[33m La media dei numeri pari\033[0m";
    echo "\n";
    echo "3 - Esercizio 3:\033[33m Saluti personalizzati\033[0m";
    echo "\n";
    echo "4 - Esercizio 4:\033[33m Somma numeri 1 a 10\033[0m";
    echo "\n";
    echo "5 - Esercizio 5:\033[33m Stampi numeri da uno a cento\033[0m";
    echo "\n";
    echo "6 - Esercizio 6:\033[33m Aggiungi al Carrello\033[0m";
    echo "\n";
    echo "\033[31m0 - Esci \033[0m";
    echo "\n";
    $input = (int) readline();

    switch ($input) {
        case '1':
            esercizio1();
            break;
        case '2':
            esercizio2();
            break;
        case '3':
            esercizio3();
            break;
        case '4':
            esercizio4();
            break;
        case '5':
            esercizio5();
            break;
        case '6':
            esercizio6();
            break;
        case '0':
            echo "\033c";
            exit();
        default:
            echo "Opzione non valida. Riprova.\n";
            mainMenu();
    }
}

function esercizio1()
{
    echo "\033c";
    echo "\n";
    echo '------ Esercizio .1 ------';
    echo "\n";
    $budget = readline('Inserisci budget: ');
    $importo = readline('Inserisci importo: ');
    while (empty($importo) || !is_numeric($importo) || $importo > $budget) {
        echo "Importo non valido, ";
        echo "\n";
        $importo = readline('Riprova:');
    }
    $importo = round($importo, 2);
    $rate = $importo / 3;
    $rate = round($rate, 2);
    echo "Paga in 3 comode rate da: $rate €";
    echo "\n";
    echo '-----------------------------';
    echo "\n";
    ripetiOtornaAlmenu();
}

function esercizio2()
{
    echo "\033c";
    echo "\n";
    echo '------ Esercizio .2 ------';
    echo "\n";
    $numeri = [10, 22, 33, 4, 55, 6, 7, 8, 9, 90, 67, 34];

    $somma = 0;
    $contatore = 0;

    foreach ($numeri as $numero) {
        if ($numero % 2 == 0) {
            $somma = $somma + $numero;
            $contatore = $contatore + 1;
        }
    }

    $media = $somma / $contatore;
    $media = round($media, 2);
    echo "La media dei numeri pari è: $media";
    echo "\n";
    echo '-----------------------------';
    echo "\n";
    ripetiOtornaAlmenu();
}

function esercizio3()
{
    echo "\033c";
    echo "\n";
    echo '------ Esercizio .3 ------';
    echo "\n";
    $users = [
        [
            'name' => 'Marco',
            'gender' => 'M',
        ],
        [
            'name' => 'Vanessa',
            'gender' => 'F',
        ],
        [
            'name' => 'Jack',
            'gender' => 'M',
        ],
        [
            'name' => 'Mari*',
            'gender' => '',
        ],
    ];

    foreach ($users as $user) {
        if ($user['gender'] == 'M') {
            echo "Buongiorno Sig. " . $user['name'] . "\n";
        } else if ($user['gender'] == 'F') {
            echo "Buongiorno Sig.ra " . $user['name'] . "\n";
        } else {
            echo "Buongiorno " . $user['name'] . "\n";
        }
    }
    echo '-----------------------------';
    echo "\n";
    ripetiOtornaAlmenu();
}

function esercizio4()
{
    echo "\033c";
    echo "\n";
    echo "------ Esercizio .4 ------";
    echo "\n";

    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }

    echo "La somma dei numeri dispari da 1 a 10 è: $sum";
    echo "\n";
    echo '-----------------------------';
    echo "\n";
    ripetiOtornaAlmenu();
}

function esercizio5()
{
    echo "\033c";
    echo "\n";
    echo '------ Esercizio .5 ------';
    echo "\n";

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "HACKADEMY\n";
        } else if ($i % 3 == 0) {
            echo "PHP\n";
        } else if ($i % 5 == 0) {
            echo "JAVASCRIPT\n";
        } else {
            echo $i . "\n";
        }
    }
    ripetiOtornaAlmenu();
}

function esercizio6()
{
    echo "\033c";
    echo "\n";
    echo '------ Esercizio .6 ------';
    echo "\n";
    echo '----- Sistema di Aggiungi al Carrello -----';
    echo "\n";

    $budget = readline('Inserisci il budget massimo a disposizione: ');
    $budget = round(floatval($budget), 2);

    $budget_iniziale = $budget;

    while ($budget > 0) {
        echo "\n";
        echo "Budget Rimanente: $budget Euro";
        echo "\n";

        echo "Inserisci il costo dell'articolo";
        echo "\n";
        echo ("oppure scrivi 'fine' per terminare:");
        $costo_articolo = readline();

        if (strtolower($costo_articolo) === 'fine') {
            break;
        }
        $costo_articolo = round(floatval($costo_articolo), 2);

        if (empty($costo_articolo) || $costo_articolo <= 0) {
            echo "Costo dell'articolo non valido. Riprova.\n";
            continue;
        }

        if ($costo_articolo > $budget) {
            echo "Il costo dell'articolo supera il budget rimanente. Riprova.\n";
            continue;
        }
        $budget -= $costo_articolo;
    }

    echo "\n";
    echo "Budget iniziale: $budget_iniziale Euro. \nBudget finale rimanente: $budget Euro.\n";
    ripetiOtornaAlmenu();
}

function ripetiOtornaAlmenu()
{
    echo "\n";
    echo "Cosa vuoi fare ora?";
    echo "\n";
    echo "1 - Esegui un altro esercizio";
    echo "\n";
    echo "2 - Torna al menu principale";
    echo "\n";
    echo "0 - Esci";
    echo "\n";

    $input = readline();

    switch ($input) {
        case '1':
            echo "\033c";
            mainMenu();
            break;
        case '2':
            echo "\033c";
            mainMenu();
            break;
        case '0':
            echo "\033c";
            exit();
        default:
            echo "Opzione non valida. Riprova.\n";
            ripetiOtornaAlmenu();
    }
}