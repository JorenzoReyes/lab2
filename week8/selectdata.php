<?php
$servername = "localhost";
$username = "webprogss221";
$password = "=latHen97";
$dbname = "webprogss221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,email,website,comment,gender FROM jjreyes_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"]. " - email: " . $row["email"]. "website: " . $row["comment"]. "comment: " . $row["gender"]. "gender: " . $row["website"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>