<?php
echo "\n";
echo '----- Selfworks 002  -----';
echo "\n";

echo "Quale esercizio vuoi fare?: ";
$esercizio = strtolower(readline());

const BUDGET = 1000;

if ($esercizio === 'tutti') {
    esercizio1();
    esercizio2();
    esercizio3();
    esercizio4();
    esercizio5();
    esercizio6();
} else if (in_array($esercizio, ['1', '2', '3', '4', '5', '6'])) {
    if ($esercizio === '1') {
        esercizio1();
    } else if ($esercizio === '2') {
        esercizio2();
    } elseif ($esercizio === '3') {
        esercizio3();
    } elseif ($esercizio === '4') {
        esercizio4();
    } elseif ($esercizio === '5') {
        esercizio5();
    } else {
        esercizio6();
    }
} else {
    echo "Inserisci un numero fra 1 e 6, oppure scrivi 'tutti' per eseguire tutti gli esercizi!";
}

function esercizio1()
{
    echo "\n";
    echo '------ Esercizio .1 ------';
    echo "\n";
    $importo = readline('Inserisci importo:');
    while (empty($importo) || !is_numeric($importo) || $importo > BUDGET) {
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
}

function esercizio2()
{
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
}

function esercizio3()
{
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
}

function esercizio4()
{
    echo "\n";
    echo '------ Esercizio .4 ------';
    echo "\n";
}

function esercizio5()
{
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
}

function esercizio6()
{
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
        // Converte il costo dell'articolo in un valore numerico con due cifre decimali
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
}
