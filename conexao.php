<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "marvel"; 
$port = "3306";

$conn = new mysqli($host, $user, $pass, $db, $port);

if($conn == true){
    echo "conectado";
}else{
    echo "Error";
}
?>