<?php
class Poule {
    private $gender;
    private $nbPattes;
    
    public function __construct() {
        $this->gender = 'Femelle';
        $this->nbPattes = 2;
    }

    public function Caquette(): void {
        echo 'Cot cot cot cot';
    }

    public function getNbPattes(): int {
        return $this->nbPattes;
    }
}