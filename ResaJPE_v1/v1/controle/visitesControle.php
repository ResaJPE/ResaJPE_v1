<?php
include_once('../data/visites.data.php');

function visitesControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			case 'enregistrer' : 
				visitesControle_enregistrerAction();
			break;
			default : 
				reservationControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function reservationControle_defaultAction() {
    $titrePage="Visites disponibles";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
    $listeVisites=visitesData_getAll();
	require '../page/visitesPage.php';
}
