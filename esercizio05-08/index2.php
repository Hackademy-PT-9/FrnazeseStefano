<?php
include 'calcolatrice.php';

$rettangolo = new Rettangolo(5, 3);

echo "Base: " . $rettangolo->getBase() . "\n";
echo "Altezza: " . $rettangolo->getAltezza() . "\n";
echo "Area: " . $rettangolo->calcolaArea() . "\n";
echo "Perimetro: " . $rettangolo->calcolaPerimetro() . "\n";
echo "Diagonale: " . $rettangolo->calcolaDiagonale() . "\n";
?>
