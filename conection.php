<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donodata";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die("error dected". mysqli_error($conn));
}
// echo("connected thank god");
?>