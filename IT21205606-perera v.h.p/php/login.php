<?php
require 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //username and password
    $username = $_POST['uname'];
    $password = $_POST['pwd'];


    $sql = "SELECT* FROM userdetails WHERE userName = '$username' ";
    $result = $conn->query($sql);

    if($result)
    {
    
        while($row = $result->fetch_assoc()){
            
            $dbusername = $row['userName'];
            $dbpassword = $row['passw'];
        }

        if($dbusername != $username || $dbpassword != $password){
            echo '<script> alert("Invalid username or Password")</script>';
        }

        else if($dbusername == $username && $dbpassword == $password){
            
            $_SESSION['LogUser'] = $username;
            session_start();
            
            //echo 'Valid';
            if($username == 'Hash21'){
            
                header("location:ChefDashboard.php");  
            }

            elseif($username == 'Admin'){
               
                header("location:admindashboard.php");  
            }

            else{
               
                header("location:home.php"); 
            }

        }
        else{
            echo 'Failed';
        }


    }

    else{
        echo 'Execution failed';
    }
           
}

?>