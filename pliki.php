<!DOCTYPE html>
<html>

	<head>
		<title>Moja Stronka </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
				<link rel="stylesheet" type="text/css" href="style.css">


	</head>
	
	
	
	<body>
		<header>
		<img src="logo-strona-maciej.png" width="70" align="left"></img>
		Pliki
		<div align="Right" >Maciej Sołtysiak Z704</div>
		</header>
		
		<section>
			 <article>
				<h1>Pliki na serwerze:</h1>
				<?php
							
							$directory = "pliki/";
							if (is_dir($directory)){
							  if ($opendirectory = opendir($directory)){
								while (($file = readdir($opendirectory)) !== false){
								  echo "Plik:" . $file . "<br>";
								 
								}
								closedir($opendirectory);
							  }
							}
							?>
						<br><br>
						


						<form action="upload.php" method="post" enctype="multipart/form-data">
							Wybierz plik do wgrania:
							<input type="file" name="fileToUpload" id="fileToUpload">
							<input type="submit" value="Wgraj Plik" name="submit">
						</form>
						
			</article>
									
			
			<nav>
			
				<ul>
				
					<li><a href="index.html">Strona Główna</a></li>
					<li><a href="Routery.html">Routery</a></li>
					<li><a href="Skrypty.php">Skrypty</a></li>
					<li><a href="MetodyAtakow.html">Metody Ataków</a></li>
					<li><a href="Zabezpieczenia.html">Zabezpieczennia</a></li>
					<li><a href="UrzadzeniaFirewall.html">Urządzenia Firewall</a></li>
					<li><a href="SrodowiskoTestowe.html">Środowisko Testowe</a></li>
					<li><a href="pliki.php">Pliki</a></li>
				</ul>
			</nav>
		</section>
		
		<footer>
		stopa
		</footer>
		
	</body>

</html>