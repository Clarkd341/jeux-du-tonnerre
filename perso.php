<?php

abstract class Perso {
    protected string $name;
    protected int $PV;
    protected int $endurance;
    protected int $force;
    protected bool $enVie;
    protected string $arme;

    // Constructeur
    public function __construct($name, $PV, $endurance, $force, $arme, $enVie = true) {
        $this->name = $name;
        $this->PV = $PV;
        $this->endurance = $endurance;
        $this->force = $force;
        $this->arme = $arme;
        $this->enVie = $enVie;
    }

    // Getters
    public function getName() { return $this->name; }
    public function getPV() { return $this->PV; }
    public function getEndurance() { return $this->endurance; }
    public function getForce() { return $this->force; }
    public function getArme() { return $this->arme; }
    public function getEnVie() { return $this->enVie ? "Oui" : "Non"; }

    // Méthode d'attaque
    public function attaquer($cible) {
        $degats = $this->force;
        if ($this->arme == "Arc") {
            $degats += 400; 
        }
        $cible->PV -= $degats;
        if ($cible->PV <= 0) {
            $cible->enVie = false;
            echo "{$this->name} attaque {$cible->name} et le tue avec {$degats} dégâts.<br>";
        } else {
            echo "{$this->name} attaque {$cible->name} et lui inflige {$degats} dégâts.<br>";
        }
    }

    // Méthode de défense
    public function defense($degats) {
        $reduction = $this->endurance * 0.2; 
        $degatsApresReduction = max(0, $degats - $reduction); 
        $this->PV -= $degatsApresReduction;

        if ($this->PV <= 0) {
            $this->enVie = false;
            echo "{$this->name} est mort après avoir subi {$degatsApresReduction} dégâts.<br>";
        } else {
            echo "{$this->name} a reçu {$degatsApresReduction} dégâts après défense. PV restants : {$this->PV}.<br>";
        }
    }
}
?>
