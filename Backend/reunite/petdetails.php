<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$petId = $_POST['petId'];

$result = mysqli_query($conn, "SELECT * FROM petlisting WHERE petid = $petId");
$checkList = mysqli_num_rows($result);

$dbdata = array();
$alldb = array();

if($checkList >= 1)
{
	while ($row = mysqli_fetch_row($result)){
		$petname = ucfirst($row[1]);
		$petbreed = ucfirst($row[2]);
		$petgender = ucfirst($row[3]);
		$petcoat = ucfirst($row[4]);
		$petcolor = ucfirst($row[5]);
		$petcountry = ucfirst($row[6]);
		$petplace = ucfirst($row[7]);
		$petcollar = ucfirst($row[8]);
		$petdesc = ucfirst($row[9]);
	
		$dbdata[] = array('petname'=>$petname, 'petbreed'=>$petbreed, 'petgender'=>$petgender, 'petcoat'=>$petcoat, 'petcolor'=>$petcolor, 'petcountry'=>$petcountry, 'petplace'=>$petplace, 'petcollar'=>$petcollar, 'petdesc'=>$petdesc);
}
	
	$alldb=$dbdata;
	
	echo json_encode($alldb);
}
else
{
	echo "Request failed.";
}
?>