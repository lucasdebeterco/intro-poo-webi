
<?php
class Li {
    private $conteudo;

    public function __construct($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function __toString() {
        return "<li>{$this->conteudo}</li>";
    }
}