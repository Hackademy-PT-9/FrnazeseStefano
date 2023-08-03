<?php
require_once('class.php');

$company1 = new Company('Amazon','USA',10000);
$company2 = new Company('Google','USA',5000);
$company3 = new Company('Fiat','ITA',1000);
$company4 = new Company('AirFrance','FRA',1400);
$company5 = new Company('Barilla','ITA',500);

$company1->totalEmployees();
// $company1->calculateAnnualCost();
$total_annual_cost = Company::getTotalAnnualCost();
echo "\n\033[0;35mIl costo annuale totale di tutte le istanze di Company è di $total_annual_cost Euro.\033[0m \n";
