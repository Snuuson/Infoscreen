<?php 

$tableName= $_GET['tableName'];

$servername = "localhost";
$username = "root";
$password = "8xfn42t07";
$dbname = "InfoscreenNew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from ".$tableName;
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
	echo $result->fetch_assoc()['tableString'];
 }else {
    echo "0 results";
}
$conn->close();




?>