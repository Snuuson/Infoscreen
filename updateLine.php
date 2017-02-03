<?php
$lineText = $_POST['line'];
$lineName = $_POST['lineName'];

saveLine($lineText,$lineName);

function saveLine($lineText,$lineName){
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
$sql = "DROP TABLE IF EXISTS ".$lineName;

if ($conn->query($sql) === TRUE) {
    echo " Table Droped ";
} else {
    echo "Error: " . $sql . "  " . $conn->error;
}
//Create Table
$sql = "CREATE TABLE ".$lineName." (lineString MEDIUMTEXT)";
if ($conn->query($sql) === TRUE) {
    echo "Table Created";
} else {
    echo "Error: " . $sql . "  " . $conn->error;
}

// Fill Table


$sql = "INSERT INTO ".$lineName." (lineString)
VALUES ('$lineText')";

if ($conn->query($sql) === TRUE) {
    echo " New record created successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
	
	
?>