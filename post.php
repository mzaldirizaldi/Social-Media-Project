<?php
$link = mysqli_connect("localhost", "root", "", "sosmed");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$a=$_GET["a"];
$b=$_GET["b"];

$sql = "INSERT INTO tweet (username,message) VALUES ('$b', '$a')";
$sqlslect = "SELECT id, username, message FROM tweet";
$result = $link->query($sqlslect);

if (mysqli_query($link, $sql)) {
  // output data of each row
    echo "Newest Message - ".$b." - Message: ".$a."<br>";
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - " . $row["username"]. " - Message: " . $row["message"]. "<br>";
  }
} else {
  echo "0 results";
}
// Close connection
mysqli_close($link);


?>