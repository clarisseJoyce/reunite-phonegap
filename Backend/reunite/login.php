<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$emailAdd = $_POST['emailAdd'];
$pw = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM userinfo WHERE emailadd = '$emailAdd'");

$checkEmail = mysqli_num_rows($query);

if ($checkEmail==1)
{
	$pass = mysqli_query($conn, "SELECT password FROM userinfo WHERE emailadd = '$emailAdd'");
	
	while($row=mysqli_fetch_row($pass)){
		$pword = $row[0];
	}
	
	if(password_verify($pw,$pword)) {
		session_start();
		$_SESSION['emailAdd'] = $emailAdd;
		$_SESSION['password'] = $pass;
	}
	else{
		echo "Incorrect password";
	}
}
else
{
	echo "Email address is not registered.";
}

?>