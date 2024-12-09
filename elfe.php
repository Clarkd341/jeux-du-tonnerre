<?php

include_once("perso.php");
include_once("arme.php");
include_once("talent.php");

class Elfe extends Perso implements Arme, Talent {
    public function __construct() {
        parent::__construct("Legolas", 500, 63, 128, "Arc");
    }

    protected int $force;
    
    // Implémentation des armes
    public function epee() {
        $this->arme = "Épée";
        
    }

    public function arc() {
        $this->arme = "Arc";

    }

    public function baton() {
        $this->arme = "Bâton";
    }

    public function hache() {
        $this->arme = "Hache";
    }

    public function bague() {
        $this->arme = "Bague";
    }

    public function batonMagique() {
        $this->arme = "Bâton magique";
    }

    // Implémentation des talents
    public function guerrier() {
        $this->force = 120;
        $this->endurance = 100;
    }

    public function magicien() {
        $this->force = 40;
        $this->endurance = 150;
    }

    public function cavalier() {
        $this->force = 100;
        $this->endurance = 60;
    }

    public function necromancien() {
        $this->force = 80;
        $this->endurance = 120;
    }

    public function voleur() {
        $this->force = 60;
        $this->endurance = 80;
    }

    public function assassin() {
        $this->force = 90;
        $this->endurance = 50;
    }
}

?>
