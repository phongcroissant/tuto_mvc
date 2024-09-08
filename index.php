<?php
include_once "vendor/autoload.php";

use App\Utilitaire\Vue;
use App\Vue\Vue_BienvenueAllerPagePrecedente;
use App\Vue\Vue_BienvenueAllerPageSuivante;

if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

if (isset($_REQUEST["action"]))
    $action = $_REQUEST["action"];
else
    $action = "defaut";

$Vue = new Vue();
switch ($case) {
    case "defaut":
        switch ($action) {
            case "allerPageSuivante":
                $Vue->addToCorps(new Vue_BienvenueAllerPagePrecedente());
                break;
            case "allerPagePrecedente":
                $Vue->addToCorps(new Vue_BienvenueAllerPageSuivante());
                break;
            case "defaut":
                $Vue->addToCorps(new Vue_BienvenueAllerPageSuivante());
                break;
        }
        break;


}
$Vue->afficher();