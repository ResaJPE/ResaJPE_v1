<?php
include_once('Connexion.php');

function userData_getIDandPwd($login){
	
	$requete = 'SELECT * FROM user WHERE login = "'.$login.'"';
	$requete = Connexion::query($requete);
	return $requete;
}
