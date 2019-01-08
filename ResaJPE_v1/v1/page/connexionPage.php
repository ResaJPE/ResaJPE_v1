<?php include('template/head.php'); ?>

<body class="bg-dark">
	<div id="main-connexion">
		<header><?php echo $titrePage; ?></header>
		<form method="POST" action="index.php?controle=connexion&action=connecter">
			<label for="email" >Login</label>
			<input type="login" id="login" name="login" placeholder="Votre login" >
			<label for="mdp" >Mot de passe</label>
			<input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" >
			<input type="submit" value="Connexion">
		</form>
        <small><?php echo $alerte; ?></small>
	</div>
</body>
</html>
