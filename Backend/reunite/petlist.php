<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM petlisting");
$checkList = mysqli_num_rows($result);
$dbdata = array();
$alldb = array();

if($checkList >= 1)
{
	while ($row = mysqli_fetch_row($result)){
		$petid = $row[0];
		$petname = ucfirst($row[1]);
		$petbreed= strtolower($row[2]);
		$petgender = strtolower($row[3]);
		$petcolor = strtolower($row[5]);
		$petcountry = $row[6];
		$petplace = ucfirst($row[7]);
		
		$dbdata[] = array('petid'=>$petid, 'petname'=>$petname, 'petbreed'=>$petbreed, 'petgender'=>$petgender, 'petcolor'=>$petcolor, 'petcountry'=>$petcountry, 'petplace'=>$petplace); 
	}
	
	$alldb=$dbdata;
	
	echo json_encode($alldb);
}


?>