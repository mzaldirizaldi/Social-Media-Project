<?php
$link = mysqli_connect("localhost", "root", "", "sosmed");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$b=$_GET["b"];
$c=$_GET["c"];
$d=$_GET["d"];

$check_email = "select email from login where email='$b' ";
$run_email = mysqli_query($link,$check_email);
$check_username = "select username from login where username='$c' ";
$run_username = mysqli_query($link,$check_username);
$check = mysqli_num_rows($run_email);
$check1 = mysqli_num_rows($run_username);
$sql = "INSERT INTO login (email, username, password) 
VALUES ('$b', '$c', '$d')";
if($check == 1){
    echo 'Email Already Exist';
    echo "<br>";
}
if($check1 == 1){
    echo 'Username Already Exist';
    echo "<br>";
}

if(mysqli_query($link, $sql)){
    echo 'Register Success';
} else{
    echo ''; mysqli_error($link);
}
// Close connection
mysqli_close($link);


?>