<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lofo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//allowed file types
$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
 
if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
    echo "false";
    return;
}

$row = mysqli_query($conn, "SELECT petid FROM petlisting ORDER BY petid DESC");
$result = mysqli_fetch_row($row); 
$petNum = $result[0];

$newName = "pet-".$petNum.".jpg";
 
move_uploaded_file($_FILES['file']['tmp_name'], 'pets/' . $newName);
 
echo "success";
die();
?>