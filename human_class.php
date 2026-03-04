<?php

class Human {
    public $nom;
    public $prenom;
    public $age;
    public $taille;
    public $sexe;
    public $poids;

    public function __construct($nom, $prenom, $age, $taille, $sexe, $poids) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->poids = $poids;
    }

    public function marcher() {
        return "Je marche";
    }

    public function parler() {
        return "Je parle";
    }
}