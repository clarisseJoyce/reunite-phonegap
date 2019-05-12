<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$pagename = $_POST['pageName'];

$petresult = mysqli_query($conn, "SELECT * FROM petlisting");
$personresult = mysqli_query($conn, "SELECT * FROM personlisting");
$userresult = mysqli_query($conn, "SELECT * FROM userinfo");

$petrow = mysqli_num_rows($petresult);
$personrow = mysqli_num_rows($personresult);
$userrow = mysqli_num_rows($userresult);

$dbdata = array();
$alldb = array();

if ($pagename == "dash") {
	$dbdata[] = array('pettotal'=>$petrow, 'persontotal'=>$personrow, 'usertotal'=>$userrow);
}
else if ($pagename == "pet") {
	while ($row = mysqli_fetch_row($petresult)){
		$petid = $row[0];
		$petname = ucfirst($row[1]);
		$petbreed = ucfirst($row[2]);
		$petgender = ucfirst($row[3]);
		$petcoat = ucfirst($row[4]);
		$petcolor = ucfirst($row[5]);
		$petcountry = ucfirst($row[6]);
		$petplace = ucfirst($row[7]);
		$petcollar = ucfirst($row[8]);
		$petdesc = ucfirst($row[9]);
		$pettype = ucfirst($row[13]);
	
		$dbdata[] = array('petid'=>$petid, 'petname'=>$petname, 'petbreed'=>$petbreed, 'petgender'=>$petgender, 'petcoat'=>$petcoat, 'petcolor'=>$petcolor, 'petcountry'=>$petcountry, 'petplace'=>$petplace, 'petcollar'=>$petcollar, 'petdesc'=>$petdesc, 'pettype'=>$pettype);
	}
}
else if ($pagename == "person") {
	while ($row = mysqli_fetch_row($personresult)) {
		$perid = $row[0];
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
	
		$dbdata[] = array('perid'=>$perid, 'pername'=>$pername, 'perage'=>$perage, 'pergender'=>$pergender, 'perheight'=>$perheight, 'perweight'=>$perweight, 'perrace'=>$perrace, 'percountry'=>$percountry, 'perplace'=>$perplace, 'perclothing'=>$perclothing, 'perdesc'=>$perdesc);
	}
}
else if ($pagename == "user") {
	while ($row = mysqli_fetch_row($userresult)) {
		$userid = $row[0];
		$userfirst = ucfirst($row[1]);
		$userlast = ucfirst($row[2]);
		$useremail = strtolower($row[3]);
		$usercountry = ucfirst($row[6]);
		
		$dbdata[] = array('userid'=>$userid,'userfirst'=>$userfirst, 'userlast'=>$userlast, 'useremail'=>$useremail, 'usercountry'=>$usercountry);
	}
}
else if ($pagename == "remove") {
	$tableName = $_POST['tableName'];
	$dataNum = $_POST['dataNum'];
	
	if ($tableName == "user"){
		$sql = mysqli_query($conn, "DELETE FROM userinfo WHERE userid = $dataNum");
	}
	else if ($tableName == "pet"){
		$sql = mysqli_query($conn, "DELETE FROM petlisting WHERE petid = $dataNum");
	}
	else if ($tableName == "person") {
		$sql = mysqli_query($conn, "DELETE FROM personlisting WHERE perid = $dataNum");
	}
}

$alldb=$dbdata;
	
echo json_encode($alldb);

?>