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

$text = $_REQUEST['message'];
echo "to jest text" . $text;
$sql = "INSERT INTO notatki (nota) VALUES ('$text')"; 


if ($conn->query($sql) === TRUE) {
    echo "Super, Rekord został dodany";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 