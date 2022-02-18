<?php
class Body {
    private $itens = array();

    public function __construct($itens) {
        $this->itens = $itens;
    }

    function __toString() {
        $retorno = "< body >";
        $retorno .= $this->itens;
        $retorno .= "< / body >";
        return $retorno;
    }
}