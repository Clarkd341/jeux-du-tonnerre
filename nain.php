<?php

include_once("perso.php");
include_once("arme.php");
include_once("talent.php");

class Nain extends Perso implements Arme, Talent {
    public function __construct() {
        parent::__construct("Gimli", 500, 50, 80, "Hache", "cavalier");
    }

    // Implémentation des méthodes d'arme
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
        $this->force = 100;
        $this->endurance = 150;
    }

    public function magicien() {
        $this->force = 50;
        $this->endurance = 100;
    }

    public function cavalier() {
        $this->force += 80;
        $this->endurance += 120;
    }

    public function necromancien() {
        $this->force = 70;
        $this->endurance = 90;
    }

    public function voleur() {
        $this->force = 60;
        $this->endurance = 50;
    }

    public function assassin() {
        $this->force = 90;
        $this->endurance = 70;
    }

    
}

?>
