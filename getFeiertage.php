<?php
 


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
//MYSQL QUERY
$sql = "SELECT * from FeiertageObj";
$result = $conn->query($sql);

//Build return statment from MYSQL-result
if ($result->num_rows > 0) {
    // output data of each row
	// expect only 1 row
    while($row = $result->fetch_assoc()) {
        echo  $row["lineString"];	
    }
} else {
    echo "0 results";
}
$conn->close();

	
	
?>