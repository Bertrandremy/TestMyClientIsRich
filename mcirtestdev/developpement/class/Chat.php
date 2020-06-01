<?php
class Chat {
    private $gender;
    private $nbPattes;
    
    public function __construct($g) {
        $this->gender = $g;
        $this->nbPattes = 4;

    }

    public function Miaule(): void {
        echo 'Miaouuuu';
    }

    public function getNbPattes(): int {
        return $this->nbPattes;
    }
}