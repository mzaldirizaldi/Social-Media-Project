<?php
$link = mysqli_connect("localhost", "root", "", "sosmed");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sqlslect = "SELECT id, username, message FROM tweet";
$result = $link->query($sqlslect);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - " . $row["username"]. " - Message: " . $row["message"]. "<br>";
  }
} else {
  echo "No Message Available";
}
// Close connection
mysqli_close($link);


?>