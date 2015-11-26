<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$montant = $_POST['montant'];
$valid = $_REQUEST['valid'];
switch($valid){

   case "validerFiche":{

    $mois = $_REQUEST['moisSelected']; 
    $idVisiteur = $_REQUEST['idVisSelect'];
    $pdo->majEtatFicheFrais($idVisiteur,$mois,'VA');
    $montant = $_POST['montant'];
    $nbjustificatifs = $_POST['nbJustifs'];
    $pdo->majMontantValide($idVisiteur,$mois,$nbjustificatifs,$montant);
    include("vues/v_validation.php");

        break;


    
    
}
?>