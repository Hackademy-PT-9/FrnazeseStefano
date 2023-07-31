<?php


// SELFWORKS .2
$testo = 'io sono un testo';
$numero = 56;
$virgola = 21.01;
$bool = true;
$var = null;

echo "\n";
echo ('--- Selfworks .2 ---');
echo "\n";
echo "\n";
var_dump($testo);
echo "\n";
var_dump($numero);
echo "\n";
var_dump($virgola);
echo "\n";
var_dump($bool);
echo "\n";
var_dump($var);
echo "--------------------";
echo "\n";

// SELFWORKS .3
const TESTO = 'testo';
const NUMERO = 56;
const VIRGOLA = 21.01;
const BOOLY = true;
const VARY = null;
echo "\n";
echo ('--- Selfworks .3 ---');
echo "\n";
echo "\n";
echo (TESTO);
echo "\n";
echo "\n";
echo (NUMERO);
echo "\n";
echo "\n";
echo (VIRGOLA);
echo "\n";
echo "\n";
echo (BOOLY);
echo "\n";
echo "\n";
echo (VARY);
echo "--------------------";
echo "\n";

// SELFWORKS .4
$text = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

echo ('--- Selfworks .4 ---');
echo "\n";
echo "\n";
echo ("$text $text2 $text3$text4 $text5 $text2 $text7 $text8$text4");
echo "\n";
echo "--------------------";

// SELFWORKS .5
$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];
$mancanti = [
    'del',
    'di'
];

// var_dump($words1);
// var_dump($words2);
$results = ""; // La frase com0leta
$results .= $words1[6][3][1][1] . ' '; // "Nel "
$results .= $words1[6][3][0] . ' '; // "mezzo "
$results .= $mancanti[0] . ' '; // "del "
$results .= $words1[6][3][1][0] . ' '; // "cammin "
$results .= $mancanti[1] . ' '; // "di "
$results .= $words2['elemento2'] . ' '; // "nostra ";
$results .= $words1[2] . ' '; // "vita "
$results .= $words1[4] . ' '; // "mi "
$results .= $words1[6][4] . ' '; // "ritrovai "
$results .= $words1[4][1] . ' '; // "per "
$results .= $words1[0] . ' '; // "una "
$results .= $words1[6][3][1][2][0] . ', '; // "selva "
$results .= $words1[6][0] . ' '; // "oscura, "
$results .= $words2['elemento3'][2] . ' '; // "ché "
$results .= $words1[6][3][1][2][1] . ' '; // "la "
$results .= $words1[7] . ' '; // "diritta"
$results .= $words1[6][3][1][2][2][0] . ' '; // "via"
$results .= $words1[6][1] . ' '; // "era"
$results .= $words2['elemento3'][1] . '.'; //smarrita

echo "\n";
echo "\n";
echo ('--- Selfworks .5 ---');
echo "\n";
echo $results;
echo "\n";
echo "\n";
echo "--------------------";

// SELFWORKS .6
$x = 10;
$y = 18;
$z = 56.0;
$t = 0.8;

$somma = $x + $y + $z + $t;
$sottrazione = $x - $y - $z - $t;
$divisone = $x / $y / $z / $t;
$moltiplicazione = $x * $y * $z * $t;
$media = ($x + $y + $z + $t) / 4;

echo "\n";
echo ('--- Selfworks .6 ---');
echo "\n";
echo "Il risultato della somma è $somma";
echo "\n";
echo "Il risultato della sottrazione è $sottrazione";
echo "\n";
echo "Il risultato della divisione è $divisone";
echo "\n";
echo "Il risultato della moltiplicazione è $moltiplicazione";
echo "\n";
echo "Il risultato della media è $media";
echo "\n";


// SELFWORKS .8(EXTRA)
$a = false;
$b = true;
$c = true;
$d = false;

$ab = !$a && $b; //true
$ad = $a || $d; //false
$bc = $b && $c; //true
$bd = !$b || $d; //false
$cb = $c && $b; //true
$ca = !$c || $a; //false

$cabc = !$a && $b && $c; //true
$cbbc = $c && !$b && $d; //false
$bdab = $b && !$d && $a; //false
$bccb = $bc && !$cb; //true
$bcab = !$bc || !$ab; //true
$bcca = !$c || !$a; //false

// Terzo Blocco Da completare
$cbbccabc = $cbbc || $cabc; //true
$bccbbdab = !$bccb && !$bdab; //false
$cabcbcca = !$cabc && $bcca; //false
$bdabbccb = $bdab && $bccb; //false
$cbbcbccb = $cbbc && $bccb; //false
$cabcbccb = $cabcbcca || $bccbbdab; //true

echo "\n";
echo "\n";
echo ('--- Selfworks .8(extra) ---');
echo "\n";
var_dump($cbbccabc); //True
echo "\n";
var_dump($bccbbdab); //True
echo "\n";
var_dump($cabcbcca); //False
echo "\n";
var_dump($bdabbccb); //False
echo "\n";
var_dump($cbbcbccb); //False
echo "\n";
var_dump($cabcbccb); //True
echo "\n";
echo "---------------------------";