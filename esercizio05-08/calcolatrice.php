<?php
include 'trait.php';

class Rettangolo {
    use Calcoli;

    protected $base;
    protected $altezza;

    public function __construct($base, $altezza) {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    public function getBase() {
        return $this->base;
    }

    public function getAltezza() {
        return $this->altezza;
    }

    public function calcolaArea() {
        return $this->mul($this->base, $this->altezza);
    }

    public function calcolaPerimetro() {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }

    public function calcolaDiagonale() {
        $baseQuadrato = $this->mul($this->base, $this->base);
        $altezzaQuadrato = $this->mul($this->altezza, $this->altezza);
        return $this->sqr($this->sum($baseQuadrato, $altezzaQuadrato));
    }
}
?>
