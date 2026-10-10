<?php
$host="localhost";
$username="root";
$password="";
$db_name="php_db";

$conn= new mysqli($host, $username, $password, $db_name);

if($conn){
    //echo "Connected Successfully!";
}else{
    die("Connection Failed: ".$conn->connect_error);
}
?>
