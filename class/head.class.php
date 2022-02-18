<?php
class Head {
    private $metas = array();
    private $title;

    public function __construct($metas, $title) {
        $this->metas = $metas;
        $this->title = $title;
    }

    function __toString() {
        $retorno = "< head ><br>";
        foreach ($this->metas as $meta) {
            $retorno .= $meta;
        }
        $retorno .= $this->title;
        $retorno .= "< / head ><br><br>";
         return $retorno;
    }
}