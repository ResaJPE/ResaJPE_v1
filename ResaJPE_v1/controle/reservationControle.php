<?php


function reservationControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			case 'enregistrer' : 
				reservationControle_enregistrerAction();
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
    $titrePage="Réservations";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
    $listeSalles=salleData_getAll();
	require '../page/reservationPage.php';
}

function reservationControle_enregistrerAction() {
    echo "<p>Ici, il y aura le code pour traiter l'enregistrement des données du formulaire</p>";
    var_dump($_POST);
}
