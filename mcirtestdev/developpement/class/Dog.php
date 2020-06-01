<?php
class Dog {
    private $gender;
    private $nbPattes;
    
    public function __construct($g) {
        $this->gender = $g;
        $this->nbPattes = 4;

    }

    public function Aboie(): void {
        echo 'Wouf Wouf !';
    }

    public function getNbPattes(): int {
        return $this->nbPattes;
    }
}