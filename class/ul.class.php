<?php
class ul {
    private $itens = array();

    public function __construct($itens) {
        $this->itens = $itens;
    }

    public function addItem($item){
        $this->itens = array_merge($this->itens,$item);
    }

    function __toString() {
        $retorno = "<ul>";
        foreach ($this->itens as $item) {
            $retorno .= $item;
        }
        $retorno .= "</ul>";
         return $retorno;
    }
}