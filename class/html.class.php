<?php
class Html {
    private $head = array();
    private $body;

    public function __construct($head, $body) {
        $this->head = $head;
        $this->body = $body;
    }

    function __toString() {
        $retorno = "< HTML ><br><br>";
        $retorno .= $this->head;
        $retorno .= $this->body;
        $retorno .= "<br><br>< / HTML >";
         return $retorno;
    }
}