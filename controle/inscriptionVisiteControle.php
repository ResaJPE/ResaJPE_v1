<?php

function inscriptionControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			default : 
				inscriptionControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function inscriptionControle_defaultAction() {
	if($_SESSION['type'] == 1){
    $titrePage="Inscription à une visite";
	$titreOnglet=$titrePage;
	require '../page/inscriptionVisitePage.php';
	}
	elseif($_SESSION['type'] == 2){

	$titrePage="Inscriptions en ligne";
	$titreOnglet=$titrePage;
	require '../page/inscriptionVisitePage.php';
	}
	elseif($_SESSION['type'] == 3){

	$titrePage="Envoie d'une requête de visite";
	$titreOnglet=$titrePage;
	require '../page/inscriptionVisitePage.php';
	}

}