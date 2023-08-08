<?php
require_once 'class.php';

class Post {
    public $Titolo;
    public $Categoria;
    public $Tag;

    public function __construct($Titolo, Categoria $Categoria, $Tag) {
        $this->Titolo = $Titolo;
        $this->Categoria = $Categoria;
        $this->Tag = $Tag;
    }
}

$newPost = new Post("Vince alla lotteria ma viene investito", new News(), "Attualità, Cronaca nera");
var_dump($newPost);
?>
