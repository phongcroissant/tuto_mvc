<?php

switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        break;
    case "allerPageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseB_PageSuivante());
        break;
    case "allerPageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de faire un retour à l'accueil du B"));
        break;
    case "versB":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de changer de case !"));
        break;

}