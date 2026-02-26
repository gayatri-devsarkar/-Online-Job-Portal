<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'job');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM jobseeker_reg";
$result = $conn->query($sql);

echo $result->num_rows;
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Notification: " . $row["description"];
    }
} else {
    echo "0 results";
}
*/
$conn->close();
?>
