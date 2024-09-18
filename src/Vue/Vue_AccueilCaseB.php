<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilCaseB extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte B!</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page d'accueil du contexte B
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='B'>
            <button type='submit' name='action' value='allerPageSuivante'>
                Aller à la page suivante
            </button>
    </form>
    
      <form action='index.php' method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='versA'>
                Aller vers le case A
            </button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}