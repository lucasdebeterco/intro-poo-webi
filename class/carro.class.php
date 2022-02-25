
<?php
class Carro {
    private $marca;
    private $modelo;

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __toString() {
        return "<li>{$this->marca} | \"{$this->modelo}</li>";
    }
}