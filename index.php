<?php
require ('controller/SiteController.php');


$rub = "";
if (isset($_GET['rub'])) {
    $rub = $_GET['rub'];
};

switch ($rub) {
    case "accueil":
        SiteController::accueil();
        break;

    case "importation":
        SiteController::importation();
        break;

    case "admin-trt-fichier":
        SiteController::trtFichier($_POST, $_FILES);
        break;

    default:
        SiteController::index();
}

