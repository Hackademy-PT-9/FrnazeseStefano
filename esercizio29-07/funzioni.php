<?php
//ESERCIZIO 1
function stampaNumero($numero)
{
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        return "HACKADEMY";
    } elseif ($numero % 3 == 0) {
        return "PHP";
    } elseif ($numero % 5 == 0) {
        return "JAVASCRIPT";
    } else {
        return strval($numero);
    }
}
function leggiNumeroDaConsole()
{
    while (true) {
        echo "\033[0;32mInserisci un numero:\033[0m \n";
        $input = trim(readline());
        if (ctype_digit($input)) {
            $numero = (int) $input;
            if ($numero <= 500) {
                return $numero;
            } else {
                echo "\033[0;31mRiprova! Inserisci un numero valido.  \n" . PHP_EOL;
            }
        } else {
            echo "\033[0;31mRiprova! Inserisci un numero valido.  \n" . PHP_EOL;
        }
    }
}
function stampaNumeriFinoA($limite)
{
    for ($numero = 1; $numero <= $limite; $numero++) {
        $risultato = stampaNumero($numero);
        echo $risultato . PHP_EOL;
    }
}
// FINE ESERCIZIO 1

//ESERCIZIO 2

function validaPassword($password)
{
    $lunghezzaMinima = 8;
    $contieneNumero = preg_match('/\d/', $password);
    $contieneMaiuscola = preg_match('/[A-Z]/', $password);
    // ctype_upper (string text)
    $contieneMinuscola = preg_match('/[a-z]/', $password);
    // ctype_lower( string $text )

    if (strlen($password) < $lunghezzaMinima) {
        return "La password deve contenere almeno 8 caratteri.";
    } elseif (!$contieneNumero) {
        return "La password deve contenere almeno un numero.";
    } elseif (!$contieneMaiuscola) {
        return "La password deve contenere almeno una lettera maiuscola.";
    } elseif (!$contieneMinuscola) {
        return "La password deve contenere almeno una lettera minuscola.";
    } else {
        return "La password è valida.";
    }
}

function leggiPasswordDaConsole()
{
    while (true) {
        echo "\033[0;32mInserisci una password:\033[0m \n";
        $password = trim(readline());
        $risultato = validaPassword($password);

        if ($risultato === "La password è valida.") {
            return $password;
        } else {
            echo "\033[0;31m$risultato\033[0m \n" . PHP_EOL;
        }
    }
}
// FINE ESERCIZIO 2