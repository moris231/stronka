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
		Skrypty
		<div align="Right" >Maciej Sołtysiak Z704</div>
		</header>
		
		<section>
			 <article>
				<h1>Tutaj możesz umieścić skrypty</h1>
				<br>
				<h2>Skrypty:</h2>
				
				 <?php
					$servername = "localhost";
					$username = "strona";
					$password = "strona123";
					$dbname = "strona";

					// Tworzymy połączenie
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Sptawdzamy połączenie
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT id, nota FROM notatki";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// wyświetlamy dane
						while($row = $result->fetch_assoc()) {
							echo $row["nota"]."<br>";
						}
					} else {
						echo "0 results";
					}
					$conn->close();
					?> 
				
					<form action="uploadskr.php" method="post" enctype="multipart/form-data">
							 <textarea name="message" rows="10" cols="30" id="text_">
						</textarea> 
							<input type="submit" value="Wgraj skrypt" name="submit">
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