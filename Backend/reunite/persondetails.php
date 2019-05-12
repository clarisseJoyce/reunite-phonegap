<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$personId = $_POST['perId'];

$result = mysqli_query($conn, "SELECT * FROM personlisting WHERE personid = $personId");
$checkList = mysqli_num_rows($result);
$dbdata = array();
$alldb = array();

if($checkList >= 1)
{
	while ($row = mysqli_fetch_row($result)){
		$pername = ucfirst($row[1]);
		$perage = ucfirst($row[2]);
		$pergender = ucfirst($row[3]);
		$perheight = ucfirst($row[4]);
		$perweight = ucfirst($row[5]);
		$perrace = ucfirst($row[6]);
		$percountry = ucfirst($row[13]);
		$perplace = ucfirst($row[7]);
		$perclothing = ucfirst($row[9]);
		$perdesc = ucfirst($row[11]);
	
		$dbdata[] = array('pername'=>$pername, 'perage'=>$perage, 'pergender'=>$pergender, 'perheight'=>$perheight, 'perweight'=>$perweight, 'perrace'=>$perrace, 'percountry'=>$percountry, 'perplace'=>$perplace, 'perclothing'=>$perclothing, 'perdesc'=>$perdesc);
	}
	
	$alldb=$dbdata;
	
	echo json_encode($alldb);
}
else
{
	echo "Wrong ID";
}
?>