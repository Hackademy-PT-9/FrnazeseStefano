<?php

class Company
{
    public $name;
    public $office;
    public $total_employees;
    public static $total_annual_cost = 0;

    public function __construct($name, $office, $total_employees)
    {
        $this->name = $name;
        $this->office = $office;
        $this->total_employees = $total_employees;
        
    }

    public function totalEmployees()
    {
        if ($this->total_employees) {
            echo "\n";
            echo "L'ufficio $this->name con sede in $this->office ha ben $this->total_employees dipendenti.";
            echo "\n";
        } else {
            echo "\n";
            echo "L'ufficio $this->name con sede in $this->office non ha dipendenti";
            echo "\n";
        }
    }

    public function calculateAnnualCost()
    {
        $tot = $this->total_employees * (1500 * 12);
        self::$total_annual_cost += $tot; 
        echo "\n";
        echo "Il costo annuale dell'Ufficio $this->name è di $tot Euro.";
        echo "\n";
        return $tot;
    }

    public static function getTotalAnnualCost()
    {
        return self::$total_annual_cost;
    }
    
}