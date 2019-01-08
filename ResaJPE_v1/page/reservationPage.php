<?php
include('template/head.php');
include('template/menu.php');
?>
<article>
    <header><?php echo $titrePage;?> </header>
	<div>
		<br>
		<form method="POST" action="index.php?controle=reservation&action=enregistrer">

		<label for="salleId">Salle : </label>
		<select name="salleId">
			<?php 
			for ($i=0 ; $i<count($listeSalles) ; $i++) {
				echo '<option value="'.$listeSalles[$i]['id'].'">'.$listeSalles[$i]['libelle'].'</option>';
			}
			?>
		</select>
		<br>
		
		<label for="date">Date</label>
		<input type="date" name="date">
		
		
		<label for="heureDebut">Heure de début</label>
		<input type="time" name="heureDebut">

		<label for="heureFin">Heure de fin</label>
		<input type="time" name="heureFin">
		
		
		<input type="submit" value="Réserver">
	
		</form>
	</div>
</article>
<?php 
include('template/footer.php'); 
?>
