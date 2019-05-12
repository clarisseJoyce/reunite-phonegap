<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petGender = $_POST['petGender'];
$petCoat = $_POST['petCoat'];
$petColor = $_POST['petColor'];
$petCountry = $_POST['petCountry'];
$petPlace = $_POST['petPlace'];
$petCollar = $_POST['petCollar'];
$petDesc = $_POST['petDesc'];
$listerEmail = $_POST['listerEmail'];
$listerContact = $_POST['listerContact'];
$listerName = $_POST['listerName'];

if ($petDesc == ""){
	$petDesc = "N/A";
}

$sql = "INSERT INTO petlisting (petname, pettype, petbreed, petgender, petcoat, petcolor, petcountry, petplace, petcollar, petdesc, listeremail, listercontact, listername) VALUES ('$petName', '$petType', '$petBreed', '$petGender', '$petCoat', '$petColor', '$petCountry', '$petPlace', '$petCollar', '$petDesc', '$listerEmail', '$listerContact', '$listerName')";
		
if ($conn->query($sql) === TRUE) {
	
}
else {
	echo "Listing cannot be processed right now";
}
?>