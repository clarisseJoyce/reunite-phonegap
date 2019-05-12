<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
    echo "false";
    return;
}

$row = mysqli_query($conn, "SELECT personid FROM personlisting ORDER BY personid DESC");
$result = mysqli_fetch_row($row); 
$personNum = $result[0];

$newName = "person-".$personNum.".jpg";
 
move_uploaded_file($_FILES['file']['tmp_name'], 'person/' . $newName);
 
echo "success";
die();
?>