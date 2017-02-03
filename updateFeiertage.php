<?php
$FeiertageObj = $_POST['FeiertageObj'];


saveFeiertage($FeiertageObj);

function saveFeiertage($FeiertageObj){
	$servername = "localhost";
	$username = "root";
	$password = "8xfn42t07";
	$dbname = "InfoscreenNew";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Drop Table
$sql = "DROP TABLE IF EXISTS FeiertageObj";

if ($conn->query($sql) === TRUE) {
    echo " Table Droped ";
} else {
    echo "Error: " . $sql . "  " . $conn->error;
}
//Create Table
$sql = "CREATE TABLE FeiertageObj (lineString MEDIUMTEXT)";
if ($conn->query($sql) === TRUE) {
    echo "Table Created";
} else {
    echo "Error: " . $sql . "  " . $conn->error;
}

// Fill Table


$sql = "INSERT INTO FeiertageObj (lineString)
VALUES ('$FeiertageObj')";

if ($conn->query($sql) === TRUE) {
    echo " New record created successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
	
	
?>