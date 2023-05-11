<?php 
require 'config.php';

//if(isset($_POST['submitbtn']))
//{

    $percentage = $_POST['percentage'];

    $target_dir = "../images/";
    $target_file = $target_dir.basename($_FILES["promoimage"]["name"]);
    move_uploaded_file($_FILES["promoimage"]["tmp_name"],$target_file);

    $oldprice = $_POST['oldprice'];
    $promoprice = $_POST['promoprice'];

    $sql = "INSERT INTO Promotion(percentage, image, oldprice, promoprice) VALUES('$percentage', ' $target_file', ' $oldprice', '$promoprice')";
    
    if($conn->query($sql))
    {
        echo "<script> alert('added successfully!!!')</script>";
        echo '<a href="../../IT21205606-perera v.h.p/php/admindashboard.php">back to dashboard</a>';
    }

    else{
        echo "error";
    }

//}

//else{
    //echo 'somthing went wrong';
//}

?>
