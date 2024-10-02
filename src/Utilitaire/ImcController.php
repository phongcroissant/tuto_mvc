<?php
namespace App\Utilitaire;
class ImcController {
    private int $poids;
    private int $taille;

    public function __construct(int $poids, int $taille) {
        $this->poids = $poids;
        $this->taille = $taille;
    }
    public function getIMC() : string {
        require_once __DIR__ . "/../Vue/Vue_CaseA_PageSuivante.php";
        $imc = $this->poids/($this->taille*$this->taille);
        if ($imc <=18.5){
            return "Insuffisance pondérale (maigreur)";
        }if ($imc > 18.5 && $imc <= 24.9){
            return "Corpulence normale";
        }if ($imc > 24.9 && $imc <= 29.9){
            return "Surpoids";
        }else {
            return "Obésité";
        }
    }
}