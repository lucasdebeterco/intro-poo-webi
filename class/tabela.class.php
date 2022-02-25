<?php
class Tabela {
    private $carros = array();
    private $colunas = array();

    public function __construct($carros, $colunas) {
        $this->carros = $carros;
        $this->colunas = $colunas;
    }

    function __toString() {
        $retorno = "<table>";

        $retorno .= "<tr>";
        foreach ($this->colunas as $coluna) {
            $retorno .= "<td>";
            $retorno .= $coluna;
            $retorno .= "</td>";
        }
        $retorno .= "</tr>";


        foreach ($this->carros as $carro) {
            $retorno .= "<tr>";
            $retorno .= "<td>";
            $retorno .= $carro->getMarca();
            $retorno .= "</td>";
            $retorno .= "<td>";
            $retorno .= $carro->getModelo();
            $retorno .= "</td>";
            $retorno .= "</tr>";
        }

        $retorno .= "</table>";

         return $retorno;
    }
}