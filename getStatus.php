<?php
$lineName = $_GET['lineName'];
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

//MYSQL query
$sql = "SELECT * from status";
$result = $conn->query($sql);

//Build return statement from MYSQL-result
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["col1"];
		
		
    }
} else {
    echo "0 results";
}
$conn->close();

	
	
?>