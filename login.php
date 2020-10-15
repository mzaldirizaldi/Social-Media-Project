<?php
$link = mysqli_connect("localhost", "root", "", "sosmed");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$a=$_GET["a"];
$b=$_GET["b"];

$check_login = "select email from login where email='$a' or username='$a' and password='$b' ";
$run_login = mysqli_query($link,$check_login);
$check = mysqli_num_rows($run_login);
if($check == 1){
        
   echo '1';
}
else{
    echo 'Password Incorrect';
}

// Close connection
mysqli_close($link);


?>