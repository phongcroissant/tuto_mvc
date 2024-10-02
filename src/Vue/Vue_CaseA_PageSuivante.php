<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_CaseA_PageSuivante extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte A!</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Calcul d'imc : 
    <form method='post'>
    <div class='mb-3'>
        <label for='poids' class='form-label'>Entrez votre poids en kg</label>
        <input type='number' class='form-control' id='poids' aria-describedby='emailHelp'>
    </div>
    <div class='mb-3'>
        <label for='taille' class='form-label'>Entrez votre taille en cm</label>
        <input type='number' class='form-control' id='taille'>
    </div>
    <button type='submit' class='btn btn-primary'>Calculez</button>
    </form>
    
    <form method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='pageAccueil'>
                Retour à l'accueil
            </button>
    </form>
</div>
 
        $this->msgErreur
    ";
        return $str ;
    }
}