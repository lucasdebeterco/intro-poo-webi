<?php

    class a {
        private $url;
        private $texto;

        public function __construct($url, $texto, $target, $css= null)
        {
            $this->url = $url;
            $this->texto = $texto;
            $this->target = $target;
            $this->css = $css;
        }

        function getUrl() {
            return $this->url;
        }

        function getTexto() {
            return $this->texto;
        }

        function getLink() {
            return "<a href=\"{$this->url}\" style=\"{$this->css}\" target=\"{$this->target}\">{$this->texto}</a>"; 
        }
    }

    $link1 = new a('https://www.magazord.com.br/', 'Magazord', '_blank', 'color: red');
    $link2 = new a('https://www.ipm.com.br/', 'IPM', '_blank');

    echo $link1->getLink();
    echo "<br><br>";
    echo $link2->getLink();
?>