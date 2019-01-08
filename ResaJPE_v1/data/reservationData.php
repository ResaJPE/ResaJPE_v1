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

function reservationData_getAll(){
    #1
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string
    #2
    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT * FROM reservation ORDER BY date DESC';

    // Execute la requete sur la base m2l grâce à la méthode query() prévue dans la classe Connexion
    $liste=Connexion::query($requete);
    
    #3
    return $liste;
}

function reservationData_getLimit($limit=0){
    #1
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string
    #2
    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT * FROM reservation ORDER BY date DESC LIMIT '.$limit;

    // Execute la requete sur la base m2l grâce à la méthode query() prévue dans la classe Connexion
    $liste=Connexion::query($requete);

    #3
    return $liste;
}

function reservationData_insert($date,$heureDebut, $heureFin,$salleId,$ligueId){
    #1
    // $resultat : int
    // $requete  : string
    #2
    // Mettre la requête dans une variable : aide au debug
	$requete='INSERT INTO reservation(date,heureDebut,heureFin,salle_id,ligue_id) VALUES ("'.$date.'","'.$heureDebut.'","'.$heureFin.'",'.$salleId.','.$ligueId.')';

    // Execute la requete sur la base m2l grâce à la méthode exec() prévue dans la classe Connexion
    $resultat=Connexion::exec($requete);
    
    #3
    return $resultat;
}
