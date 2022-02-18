
<?php
class Title {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function __toString() {
        return "< title >\"{$this->title}\"< / title ><br>";
    }
}