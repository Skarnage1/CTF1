
<?php session_start(); ?>

<?php
$path_parts = pathinfo($_SERVER['PHP_SELF']);
$page = $path_parts['basename'];


?>


<html>

	<head>

	<title>CTF Monster Cookie</title>
	
	<link href="css/styleCTF.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<div id="main">
		
		
			<div id="texte">
			
			<h1>CTF</h1>
			
			<p>
			Devenez administrateur ; Pour vous authentifier : 
			
			<b>nom d'utilisateur : anthropo et  mot de passe : 0000</b>
			
			</p>
			
			</div>
			<div id="contenu">
						
						<ul id="nav-box">
							<li><a href="index.php">Tuto 1</a></li>
							<li><a href="ctf-tutoN2.php">Tuto 2</a></li>
							<li><a href="ctf-tutoN3.php">Tuto 3</a></li>
							<li><a href="ctf-tutoN4.php">Tuto 4</a></li>
						</ul>
			
				<div id="centre">
						
						<p>
							<img src="./images/cookie.jpg">
						</p>
						
				</div>
				
				<div id="droite">
					<?php
 
  
if (isset($_COOKIE['d']) and 
$_COOKIE['d']=='2dd07c9ce0189aaacacff6a86a5fc61a8d38d851') echo 
"<p>Bravo, vous venez de passer administrateur, le FLAG est : <strong>aZD4jVuu1N</strong></p>";

else

  if  (isset($_POST['login']) 
				and $_POST['login']=="anthropo" 
						and isset($_POST['passwd']) 
							and $_POST['passwd']=="0000") { 
		
		setcookie("user","0fe761d11aa275da7b105d68bfed746a"); 
		setcookie("d","0b20cd7f98fde6a0c65a6ff68ffdfb627f32d176"); 
   
   echo "<p>Bonjour anthropo, vous &ecirc;tes logués.</p>";
	  } 
	  
else 
	
	
	echo "
	<form method=\"post\" action=\"$page\" >
	<input name=\"login\" type=\"text\" size=\"10\"><br>
	<input name=\"passwd\" type=\"password\" size=\"10\"><br>
	<INPUT TYPE=SUBMIT VALUE=\"GO\">
	</form>";

		/*
	
	decrypter :
	Comment reconnaître les cryptages :
	
	
	
	0b20cd7f98fde6a0c65a6ff68ffdfb627f32d176	sha1	Utilisateur		40 caractères HASH-SHA1
	
	2dd07c9ce0189aaacacff6a86a5fc61a8d38d851	sha1	administrateur
	
	0fe761d11aa275da7b105d68bfed746a			md5		anthropo		32 caractères HASH-MD5
	
	
	Pour les décrypter :
	
	https://crackstation.net/
	
	
	-----
	explication : 
			Algo de hashage :
			MD5 : possède 32 caractères basée sur cette "sequence" : [a-z0-9] exemple :
					94274810fb82f7045f3429ea94cdae1d
					
			SHA1 : même particularité que le MD5 sauf qu'il possède 40 caractères exemple :
					4a6e96e3a7455bac63e7922148c3083ed7bb7487
					
					
			Base 64 : particularité de possédé souvent un complément final "=" à la fin du code
					aGFjazR5b3U=

					peut avoir aussi deux "=" comme
					YW9qaXVoZ3lnaW9qaGl1YQ==

					parfois il y'en a pas
			
			DES :
					possède 13 caractères et utilise de nombreux caractères(lettres,slash,points)
					58Q0fZkEV0bS.

					Malgré le fait qu'il utilise autant de caractère il se peut qu'il n'y ait parfois que des lettres et des chiffres.
					3qXOJthPBz99I


	Solution :
						
			le cookie « d » contient le HASH-SHA1 de « Utilisateur » 
			et le cookie « user », le HASH-MD5 de « anthropo ». 
			Visiblement, ces deux cookies mémorisent le nom d’utilisateur et les droits de celui-ci. 
			Nous cherchons  le HASH-SHA1 de « Administrateur » et le mettons à la place du cookie "d".
						 


	*/
	
?>
	

				</div>
				
				
			</div>		
		</div>

	</body>

</html>
