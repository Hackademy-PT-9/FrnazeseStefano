<?php
abstract class Categoria {
    abstract public function getMyCategory();
}

class News extends Categoria {
    public function getMyCategory() {
        return "News";
    }
}

class Sport extends Categoria {
    public function getMyCategory() {
        return "Sport";
    }
}

class Gossip extends Categoria {
    public function getMyCategory() {
        return "Gossip";
    }
}

class Storia extends Categoria {
    public function getMyCategory() {
        return "Storia";
    }
}
?>
