<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM personlisting");
$checkList = mysqli_num_rows($result);
$dbdata = array();
$alldb = array();

if($checkList >= 1)
{
	while ($row = mysqli_fetch_row($result)){
		$perid = $row[0];
		$pername = ucfirst($row[1]);
		$perage = $row[2];
		$pergender = strtolower($row[3]);
		$perrace = strtolower($row[6]);
		$perplace = ucfirst($row[7]);
		$percountry = ucfirst($row[13]);
		
		$dbdata[] = array('perid'=>$perid, 'pername'=>$pername, 'perage'=>$perage, 'pergender'=>$pergender, 'perrace'=>$perrace, 'percountry'=>$percountry, 'perplace'=>$perplace);
	}
	
	$alldb=$dbdata;
	
	echo json_encode($alldb);
}


?>