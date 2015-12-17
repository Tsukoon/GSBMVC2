<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerVisiteur':{
		$VisiteurCL=$pdo->getvisiteurCL();
		
		include("vues/v_validerFicheFrais.php");
               
		break;
	}
	
}
?>