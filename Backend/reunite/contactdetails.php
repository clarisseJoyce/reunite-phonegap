<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$contactId = $_POST['contactId'];
$tableName = $_POST['tableName'];

if ($tableName == "pet"){
	$result = mysqli_query($conn, "SELECT * FROM petlisting WHERE petid = $contactId");
}
else {
	$result = mysqli_query($conn, "SELECT * FROM personlisting WHERE personid = $contactId");
}

$checkList = mysqli_num_rows($result);
$dbdata = array();
$alldb = array();

if($checkList >= 1)
{
	while ($row = mysqli_fetch_row($result)){
		$listerEmail = strtolower($row[10]);
		$listerContact = $row[11];
		$listerName = ucfirst($row[12]);
	
		$dbdata[] = array('listeremail'=>$listerEmail, 'listercontact'=>$listerContact, 'listername'=>$listerName);
	}
	
	$alldb=$dbdata;
	
	echo json_encode($alldb);
}
else
{
	echo "Wrong ID";
}
?>
