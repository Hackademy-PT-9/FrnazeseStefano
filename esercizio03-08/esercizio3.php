<?php
class Car {
  private $num_telaio;

  public function __construct($num_telaio) {
    $this->num_telaio = $num_telaio;
  }
}

class Fiat extends Car {
  protected $nome;
  protected $targa;

  public function __construct($num_telaio, $nome, $targa) {
    parent::__construct($num_telaio);
    $this->nome = $nome;
    $this->targa = $targa;
  }

  public function getCarInfo() {
    return "La mia macchina è {$this->nome} con targa {$this->targa} e numero telaio{$this->num_telaio}";
    // $numero_telaio = empty($this->num_telaio) ? 'private' : $this->num_telaio;
    // return "La mia macchina è {$this->nome} con targa {$this->targa} e numero di telaio {$numero_telaio} \n";
  }
}

$car = new Fiat("183784", "Opel", "AGHTYU");
echo "\n";
echo "La mia macchina è {$car->getCarInfo()}.";
echo "\n";
var_dump($car);
echo "\n";

