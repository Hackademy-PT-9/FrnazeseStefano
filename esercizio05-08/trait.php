<?php
trait Calcoli {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a) {
        return sqrt($a);
    }
}
?>
