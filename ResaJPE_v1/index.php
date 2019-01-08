<?php

include('../config/Config.php');
include('../controle/connexionControle.php');
include('../controle/accueilControle.php');
include('../controle/listesControle.php');
include('../controle/reservationControle.php');
include('../controle/parametresControle.php');

// activer la session
session_start();

// Vérifier les paramètres du GET
$controle='';
if (isset($_GET['controle']))
{
	$controle=$_GET['controle'];
}

$action='';
if (isset($_GET['action']))
{
	$action=$_GET['action'];
}

// L'action demandée est envoyée vers le controle associé à la page demandée
// Cette action est orientée métier : ce que souhaite le client comme fonctionalités, indépendamment de la notion de tables!
switch ($controle) {
	case 'accueil' :
		accueilControle($action);
	break;
	case 'listes' :
		listesControle($action);
	break;
	case 'reservation' :
		reservationControle($action);
	break;
	case 'parametres' :
		parametresControle($action);
	break;
	case 'connexion' :
		connexionControle($action);
	break;
	default : // A défaut par sécurité, c'est direct retour à l'authentification
		connexionControle($action);
	break;
}

