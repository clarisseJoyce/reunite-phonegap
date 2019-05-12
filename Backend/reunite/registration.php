<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailAdd = $_POST['emailAdd'];
$options = [
    'cost' => 12,
];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
$country = $_POST['country'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = mysqli_query($conn, "SELECT * FROM userinfo WHERE emailAdd = '$emailAdd'");
$count = mysqli_num_rows($query);

if ($count>=1)
{
	echo "Email address is already in use";
}
else
{
	$sql = "INSERT INTO userinfo (firstname, lastname, emailadd, password, country) VALUES ('$firstName', '$lastName', '$emailAdd', '$pass', '$country')";
		
	if ($conn->query($sql) === TRUE) {
	
	}
	else {
		echo "Cannot process registration right now.";
	}
}
	
?>