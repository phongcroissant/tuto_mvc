<?php

if(isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";


switch ($case) {
    case "defaut":
        include("vues/v_accueil.php");
        break;

}
