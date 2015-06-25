<html>


	<head>

	<title>Atelier CTF White horse</title>
	
	<link href="css/styleCTF.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<div id="main">
		
		
			<div id="texte">
			
			<h1>CTF</h1>
			
			<p>
			R&eacute;pondez &agrave; cette question pour obtenir le FLAG :
			</p>
			
			<p>
				Quelle est la couleur du cheval blanc d'Henri IV ?
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
							<img src="./images/chevalblanc.jpg">
						</p>
						
				</div>
				
				<div id="droite">
					<p>votre r&eacute;ponse :
					<form method=post action="post_ctf_2.php">
					<select name ="couleur">
						<option value ="bleu">bleu</option>
						<option value ="rouge">rouge</option>
						<option value ="vert">vert</option>*
						<option value ="blanc">blanc</option>
					<INPUT TYPE=SUBMIT VALUE="GO">
					</form>
					
					</p>
				</div>
				
				
			</div>		
		</div>

	</body>

</html>
