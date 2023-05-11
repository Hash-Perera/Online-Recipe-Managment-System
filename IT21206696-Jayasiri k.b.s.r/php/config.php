<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tastyKitchen";

//create connection
$conn = new mysqli($servername , $username, $password, $database);

//check conection
if($conn->connect_error){
    die("connection faild".$conn->connect_error);
}

else{
    echo "";
}

?>
