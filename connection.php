<?php
$servername = "localhost";
$username = "root";  
$password = "Anil@2004";     
$dbname = "acxiom"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("connection failed: " .$conn->connect_error);
}
?>
