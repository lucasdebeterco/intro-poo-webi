<?php
class Tabela {
    private $carros = array();
    private $colunas = array();
    private $pagina;

    public function __construct($carros, $colunas, $pagina) {
        $this->carros = $carros;
        $this->colunas = $colunas;
        $this->pagina = $pagina;
    }

    function __toString() {
        $retorno = "<table>";

        $retorno .= "<tr>";
        foreach ($this->colunas as $coluna) {
            $retorno .= "<td>";
            $retorno .= "<b>" . $coluna . "</b>";
            $retorno .= "</td>";
        }

        $retorno .= "<td>";
        $retorno .= "<b>Alteração</b>";
        $retorno .= "</td>";

        $retorno .= "<td>";
        $retorno .= "<b>Exclusão</b>";
        $retorno .= "</td>";


        $retorno .= "</tr>";

        foreach ($this->carros as $key=>$carro) {
            if ( $key+1 > ($this->pagina*10) -10 && $key+1 < $this->pagina*10 ) {
                $retorno .= "<tr>";

                $retorno .= "<td>";
                $retorno .= $carro->getMarca();
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= $carro->getModelo();
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= "<a>Alterar</a>";
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= "<a>Excluir</a>";
                $retorno .= "</td>";

                $retorno .= "</tr>";
            }
        }

        $retorno .= "</table>";

         return $retorno;
    }
}