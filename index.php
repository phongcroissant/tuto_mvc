<?php
include_once "vendor/autoload.php";
use App\Utilitaire\Vue;
use App\Vue\Vue_Bienvenue;

if(isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

$Vue = new Vue();
switch ($case) {
    case "defaut":
        $Vue->addToCorps(new Vue_Bienvenue());
        break;

}
$Vue->afficher();