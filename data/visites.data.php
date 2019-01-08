<?php
include_once('Connexion.php');

//
// Table : reservation
//
// getAll()
// getLimit()
// findOne()
// count()
// update()
// insert()

function visitesData_getAll(){
    #1
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string
    #2
    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT entreprise_id, date, etat, service_id, etatVisite.etatVisites FROM visite, etatVisite WHERE etatVisite.id = visite.etat ORDER BY date DESC';

    // Execute la requete sur la base m2l grâce à la méthode query() prévue dans la classe Connexion
    $liste=Connexion::query($requete);
    
    #3
    return $liste;
}

function visitesData_getCount(){
	
	$requete = 'SELECT COUNT(id) AS nbVisites FROM visite';
	$result= Connexion::query($requete);
	return $result;
	
}
