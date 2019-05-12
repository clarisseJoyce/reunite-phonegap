<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$personName = $_POST['personName'];
$personAge = $_POST['personAge'];
$personGender = $_POST['personGender'];
$personHeight = $_POST['personHeight'];
$personWeight = $_POST['personWeight'];
$personRace = $_POST['personRace'];
$personCountry = $_POST['personCountry'];
$personPlace = $_POST['personPlace'];
$personClothing = $_POST['personClothing'];
$personDesc = $_POST['personDesc'];
$listerEmail = $_POST['listerEmail'];
$listerContact = $_POST['listerContact'];
$listerName = $_POST['listerName'];

$sql = "INSERT INTO personlisting (personname, personage, persongender, personheight, personweight, personrace, personcountry, personplace, personclothing, persondesc, listeremail, listercontact, listername) VALUES ('$personName', '$personAge', '$personGender', '$personHeight', '$personWeight', '$personRace', '$personCountry', '$personPlace', '$personClothing', '$personDesc', '$listerEmail', '$listerContact', '$listerName')";
		
if ($conn->query($sql) === TRUE) {
	
}
else {
	echo "Listing cannot be processed right now";
}
?>