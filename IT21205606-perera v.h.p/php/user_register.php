<?php
session_start();
require 'config.php';



//if(isset($_POST['submit'])){

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];

    //sql insert querie
    $sql = "INSERT INTO userDetails(firstName, lastName, userName, email, gender, passw) VALUES('$firstName', '$lastName', '$userName', '$email', '$gender', '$password');" ;

    if($conn->query($sql)){
        echo "<script> alert('Record added successfully!!!')</script>";
        echo '<a href="../html/Home-guest.html">'."Back to Dashboard".'</a>';
    }
    
    else{
        echo "<script> alert('ERROR : could not able to execute the quary)</script>";
        //echo $sql;
    }
 
//}

/*else{
    echo 'something wrong';
}*/
 
 
 ?>