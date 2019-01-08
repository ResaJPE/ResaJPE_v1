<?php
include_once('../data/visites.data.php');

function visitesControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			default : 
				visitesControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function visitesControle_defaultAction() {
    $titrePage="Visites disponibles";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
    $listeVisites=visitesData_getAll();
	require '../page/visitesPage.php';
}
