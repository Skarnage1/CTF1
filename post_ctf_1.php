<?php

	if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "wonderland") // Si le mot de passe est bon
	{
	// On affiche les codes
	?>
		<h1>Flag 1:</h1>
		<p><strong>CRD5-GTF6</strong></p>   
		
        <?php
	/*
	
	Mot de passe :
	
	4cecaff2b30bbe75ce75ce7322109164cfb5
	
	
	voir : https://crackstation.net/
	
	
		
	*/}
	elseif ($_POST['mot_de_passe'] ==  "4cecaff2b30bbe75ce75ce7322109164cfb5")
	{
		echo 'encore un petit effort...';
		echo '<a href="ctf-tutoN1.php"><br /><img src="./images/longtarin.png" >';
		echo '<p>Retour</p></a>';
	}

	else // Sinon, on affiche un message d'erreur
	{
		echo '<p>Mot de passe incorrect</p>';
		echo '<a href="index.php"><br /><img src="./images/longtarin.png" >';
		echo '<p>Retour</p></a>';
		
	}
	?>
