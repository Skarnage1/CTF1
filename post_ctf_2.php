<?php

	if (isset($_POST['couleur']) AND $_POST['couleur'] ==  "blanc") // 
	{
	// On affiche les codes
	?>
		<h1>Flag 2:</h1>
		<p><strong>FCD4-XWA8</strong></p>
		
        <?php
	}
	else // Sinon, on affiche un message d'erreur
	{
		echo '<p>Incorrect</p>';
		echo '<p><a href="ctf-tutoN2.php">Retour</p>';
	}
	?>
