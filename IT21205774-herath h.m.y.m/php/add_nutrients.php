<?php 
require 'config.php';

//if(isset($_POST['btnsubbmit'])){


  $food = $_POST["FoodName"];
  $fat = $_POST["Fat"];
  $carb = $_POST["Carbohydrate"];
  $protein = $_POST["Protein"];
  $calories = $_POST["Calories"];
      
      
  $sql = "INSERT INTO nutrients (food, fat, carb, protein, calories) VALUES ('$food', '$fat', '$carb', '$protein', $calories) ";

  if($conn->query($sql)){
    echo "<script> alert('Record added successfully!!!')</script>";
    echo '<a href="../../IT21205606-perera v.h.p/php/admindashboard.php">back to dashboard</a>';
  }

  else{
    echo "<script> alert('ERROR : could not able to execute the quary)</script>";
    //echo $sql;
  }

//}




    
?>