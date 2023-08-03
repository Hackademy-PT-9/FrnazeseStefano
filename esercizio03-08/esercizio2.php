<?php
class Animale
{
    public function __construct()
    {
        echo "Sono un animale";
    }

    protected function stampaSpecializzazione()
    {
        // Non fa nulla nella classe di base
    }
}

class Vertebrato extends Animale
{
    protected function stampaSpecializzazione()
    {
        echo " Vertebrato";
    }

    public function __construct()
    {
        parent::__construct();
        $this->stampaSpecializzazione();
    }
}

class SangueFreddo extends Vertebrato
{
    protected function stampaSpecializzazione()
    {
        parent::stampaSpecializzazione();
        echo " a Sangue Freddo";
    }
}

class SangueCaldo extends Vertebrato
{
    protected function stampaSpecializzazione()
    {
        parent::stampaSpecializzazione();
        echo " a Sangue Caldo";
    }
}

class Leone extends SangueCaldo
{
    protected function stampaSpecializzazione()
    {
        parent::stampaSpecializzazione();
        echo "\nSono un Leone";
    }
}

class Pesce extends SangueFreddo
{
    protected function stampaSpecializzazione()
    {
        parent::stampaSpecializzazione();
        echo "\nSplash!";
    }
}

class Rettile extends SangueFreddo
{
    protected function stampaSpecializzazione()
    {
        parent::stampaSpecializzazione();
        echo "\nSono un Serpente";
    }
}

$magikarp = new Pesce();
echo "\n";echo "\n";echo "\n";

$serpente = new Rettile();
echo "\n";echo "\n";echo "\n";

$leone = new Leone();
echo "\n";echo "\n";echo "\n";
